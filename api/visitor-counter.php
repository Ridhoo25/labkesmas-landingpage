<?php
/**
 * Visitor Counter - LABKESMAS 3 KALTENG
 * Uses CounterAPI (counterapi.dev) v2 for persistent counting across deploys.
 * Total: never reset. Month/Day: auto-reset when period changes.
 * Local backup ensures data survives if CounterAPI goes down.
 */

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

if (!isset($_SESSION)) session_start();

$apiKey    = 'ut_TbXxiXSY7jg7TQRbR2onSHVHy4ZcK5tlhXnlevT2';
$workspace = 'labkesmas3kalteng';
$baseUrl   = "https://api.counterapi.dev/v2/{$workspace}";

$now     = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
$dayKey  = (int)$now->format('Ymd');
$monthKey = (int)$now->format('Ym');

$backupFile = __DIR__ . '/../assets/data/counter_backup.json';

function ca_api($name, $action = '') {
    global $baseUrl, $apiKey;
    $path = $action ? "/{$name}/{$action}" : "/{$name}";
    $url  = "{$baseUrl}{$path}";
    $ctx  = stream_context_create([
        'http' => [
            'timeout' => 5,
            'header'  => "Authorization: Bearer {$apiKey}\r\n"
        ]
    ]);
    $res = @file_get_contents($url, false, $ctx);
    if ($res === false) return null;
    $json = json_decode($res, true);
    return isset($json['data']) ? $json['data'] : null;
}

function ca_up($name) {
    $data = ca_api($name, 'up');
    return isset($data['up_count']) ? $data['up_count'] : null;
}

function ca_get($name) {
    $data = ca_api($name);
    return isset($data['up_count']) ? $data['up_count'] : null;
}

function ca_reset($name) {
    ca_api($name, 'reset');
}

function load_backup() {
    global $backupFile;
    if (!file_exists($backupFile)) return [];
    $raw = file_get_contents($backupFile);
    return $raw ? json_decode($raw, true) : [];
}

function save_backup($data) {
    global $backupFile;
    $existing = load_backup();
    $merged   = array_merge($existing, $data);
    file_put_contents($backupFile, json_encode($merged, JSON_PRETTY_PRINT));
}

function get_reset_dates() {
    $file = __DIR__ . '/../assets/data/reset_dates.json';
    if (!file_exists($file)) return [];
    $raw = file_get_contents($file);
    return $raw ? json_decode($raw, true) : [];
}

function save_reset_dates($dates) {
    $file = __DIR__ . '/../assets/data/reset_dates.json';
    file_put_contents($file, json_encode($dates, JSON_PRETTY_PRINT));
}

function needs_reset($key, $currentPeriodNum) {
    $dates = get_reset_dates();
    if (!isset($dates[$key])) return true;
    return $dates[$key] !== $currentPeriodNum;
}

function mark_reset($key, $currentPeriodNum) {
    $dates = get_reset_dates();
    $dates[$key] = $currentPeriodNum;
    save_reset_dates($dates);
}

if (!isset($_SESSION['visitor_counted'])) {
    $backup = load_backup();

    if (needs_reset('day', $dayKey)) {
        ca_reset('today');
        save_backup(['today' => 0]);
        mark_reset('day', $dayKey);
    }
    if (needs_reset('month', $monthKey)) {
        ca_reset('month');
        save_backup(['month' => 0]);
        mark_reset('month', $monthKey);
    }

    $total = ca_up('visitor-total');
    $month = ca_up('month');
    $day   = ca_up('today');
    $yearCount = ca_up('years');

    if ($total !== null) save_backup(['visitor-total' => $total]);
    if ($month !== null) save_backup(['month' => $month]);
    if ($day !== null)   save_backup(['today' => $day]);
    if ($yearCount !== null) save_backup(['years' => $yearCount]);

    $_SESSION['visitor_counted'] = true;
} else {
    $total     = ca_get('visitor-total');
    $month     = ca_get('month');
    $day       = ca_get('today');
    $yearCount = ca_get('years');
}

$backup = load_backup();

$result = [
    'total'      => (int)($total ?: $backup['visitor-total'] ?? 0),
    'month'      => (int)($month ?: $backup['month'] ?? 0),
    'day'        => (int)($day ?: $backup['today'] ?? 0),
    'year'       => (int)($yearCount ?: $backup['years'] ?? 0),
    'yearLabel'  => $now->format('Y'),
    'monthLabel' => $now->format('Y-m')
];

echo json_encode($result);
