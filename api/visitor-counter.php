<?php
/**
 * Visitor Counter - LABKESMAS 3 KALTENG
 * Total / Bulan ini / Hari ini
 */

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$countFile = __DIR__ . '/../assets/data/visitor_count.json';

if (!is_dir(dirname($countFile))) {
    mkdir(dirname($countFile), 0755, true);
}

$count = ['total' => 0, 'month' => 0, 'day' => 0, 'month_key' => '', 'day_key' => ''];

if (file_exists($countFile)) {
    $data = json_decode(file_get_contents($countFile), true);
    if ($data) $count = array_merge($count, $data);
}

$now = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
$monthKey = $now->format('Y-m');
$dayKey = $now->format('Y-m-d');

if (!isset($_SESSION)) session_start();

if (!isset($_SESSION['visitor_counted'])) {
    $count['total'] = (int)$count['total'] + 1;

    if (!isset($count['month_key']) || $count['month_key'] !== $monthKey) {
        $count['month'] = 1;
        $count['month_key'] = $monthKey;
    } else {
        $count['month'] = (int)$count['month'] + 1;
    }

    if (!isset($count['day_key']) || $count['day_key'] !== $dayKey) {
        $count['day'] = 1;
        $count['day_key'] = $dayKey;
    } else {
        $count['day'] = (int)$count['day'] + 1;
    }

    $_SESSION['visitor_counted'] = true;

    file_put_contents($countFile, json_encode($count, JSON_PRETTY_PRINT));
}

echo json_encode([
    'total' => (int)$count['total'],
    'month' => (int)$count['month'],
    'day'   => (int)$count['day']
]);
