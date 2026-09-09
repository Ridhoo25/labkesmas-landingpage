<?php
/**
 * Visitor Counter - LABKESMAS 3 KALTENG
 * Uses CounterAPI (counterapi.dev) v2 for persistent counting.
 * Local backup ensures data survives if CounterAPI goes down.
 */

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

if (!isset($_SESSION)) session_start();

$apiKey    = 'ut_TbXxiXSY7jg7TQRbR2onSHVHy4ZcK5tlhXnlevT2';
$workspace = 'labkesmas3kalteng';
$baseUrl   = "https://api.counterapi.dev/v2/{$workspace}";

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

if (!isset($_SESSION['visitor_counted'])) {
    $total = ca_up('visitor-total');
    if ($total !== null) save_backup(['visitor-total' => $total]);
    $_SESSION['visitor_counted'] = true;
} else {
    $total = ca_get('visitor-total');
}

$backup = load_backup();

echo json_encode([
    'total' => (int)($total ?: $backup['visitor-total'] ?? 0)
]);
