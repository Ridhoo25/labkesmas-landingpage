<?php
/**
 * Visitor Counter - LABKESMAS 3 KALTENG
 * Uses CountAPI (countapi.xyz) for persistent counting across deploys.
 * Query params: ?year=2026&month=09 (optional, defaults to current)
 */

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

if (!isset($_SESSION)) session_start();

$namespace = 'labkesmas3kalteng';

$now   = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
$currentYear  = (int)$now->format('Y');
$currentMonth = (int)$now->format('m');
$monthKey = $now->format('Y-m');
$dayKey   = $now->format('Y-m-d');

$reqYear  = isset($_GET['year']) ? (int)$_GET['year'] : $currentYear;
$reqMonth = isset($_GET['month']) ? (int)$_GET['month'] : $currentMonth;

$isCurrentPeriod = ($reqYear === $currentYear && $reqMonth === $currentMonth);

function countapi_hit($ns, $key) {
    $url = "https://api.countapi.xyz/hit/{$ns}/{$key}";
    $ctx = stream_context_create(['http' => ['timeout' => 3]]);
    $res = @file_get_contents($url, false, $ctx);
    if ($res === false) return null;
    $json = json_decode($res, true);
    return isset($json['value']) ? $json['value'] : null;
}

function countapi_get($ns, $key) {
    $url = "https://api.countapi.xyz/get/{$ns}/{$key}";
    $ctx = stream_context_create(['http' => ['timeout' => 3]]);
    $res = @file_get_contents($url, false, $ctx);
    if ($res === false) return null;
    $json = json_decode($res, true);
    return isset($json['value']) ? $json['value'] : null;
}

$reqMonthKey = $reqYear . '-' . str_pad($reqMonth, 2, '0', STR_PAD_LEFT);

if ($isCurrentPeriod && !isset($_SESSION['visitor_counted'])) {
    $total = countapi_hit($namespace, 'total');
    $month = countapi_hit($namespace, "month-{$monthKey}");
    $day   = countapi_hit($namespace, "day-{$dayKey}");
    $yearCount = countapi_hit($namespace, "year-{$currentYear}");
    $_SESSION['visitor_counted'] = true;
} else {
    $total = countapi_get($namespace, 'total');
    $month = countapi_get($namespace, "month-{$reqMonthKey}");
    $day   = ($isCurrentPeriod)
        ? countapi_get($namespace, "day-{$dayKey}")
        : null;
    $yearCount = countapi_get($namespace, "year-{$reqYear}");
}

echo json_encode([
    'total'     => (int)($total ?: 0),
    'month'     => (int)($month ?: 0),
    'day'       => $day !== null ? (int)$day : null,
    'year'      => (int)($yearCount ?: 0),
    'yearLabel' => $reqYear,
    'monthLabel' => $reqMonth
]);
