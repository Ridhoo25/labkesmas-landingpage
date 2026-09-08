<?php
/**
 * Visitor Counter - LABKESMAS 3 KALTENG
 * Uses CounterAPI (counterapi.dev) v2 for persistent counting across deploys.
 * Total: never reset. Month/Day: auto-reset when period changes.
 */

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

if (!isset($_SESSION)) session_start();

$apiKey    = 'ut_TbXxiXSY7jg7TQRbR2onSHVHy4ZcK5tlhXnlevT2';
$workspace = 'labkesmas3kalteng';
$baseUrl   = "https://api.counterapi.dev/v2/{$workspace}";

$now   = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
$dayKey   = $now->format('Y-m-d');
$monthKey = $now->format('Y-m');

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

function ca_get_updated_at($name) {
    $data = ca_api($name);
    return isset($data['updated_at']) ? $data['updated_at'] : null;
}

function needs_reset($counterName, $periodKey) {
    $updatedAt = ca_get_updated_at($counterName);
    if (!$updatedAt) return false;
    $serverNow = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
    $updated   = new DateTime($updatedAt, new DateTimeZone('UTC'));
    $diff = $serverNow->getTimestamp() - $updated->getTimestamp();
    $hoursDiff = $diff / 3600;

    if ($periodKey === 'day' && $hoursDiff >= 24) return true;
    if ($periodKey === 'month' && $hoursDiff >= 24 * 28) return true;
    return false;
}

if (!isset($_SESSION['visitor_counted'])) {
    if (needs_reset('today', 'day')) {
        ca_reset('today');
    }
    if (needs_reset('month', 'month')) {
        ca_reset('month');
    }

    $total = ca_up('visitor-total');
    $month = ca_up('month');
    $day   = ca_up('today');
    $yearCount = ca_up('years');
    $_SESSION['visitor_counted'] = true;
} else {
    $total = ca_get('visitor-total');
    $month = ca_get('month');
    $day   = ca_get('today');
    $yearCount = ca_get('years');
}

echo json_encode([
    'total'  => (int)($total ?: 0),
    'month'  => (int)($month ?: 0),
    'day'    => (int)($day ?: 0),
    'year'   => (int)($yearCount ?: 0),
    'yearLabel'  => $now->format('Y'),
    'monthLabel' => $monthKey
]);
