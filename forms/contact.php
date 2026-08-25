<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars(trim($_POST["name"] ?? ""));
    $email = filter_var(trim($_POST["email"] ?? ""), FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars(trim($_POST["subject"] ?? ""));
    $message = htmlspecialchars(trim($_POST["message"] ?? ""));

    $to = "labkesmas.kalteng@gmail.com";
    $headers = "From: $email\r\nReply-To: $email\r\nContent-Type: text/plain; charset=UTF-8\r\n";
    $body = "Nama: $name\nEmail: $email\n\n$message";

    if (mail($to, $subject, $body, $headers)) {
        header("Content-Type: application/json");
        http_response_code(200);
        echo json_encode(["status" => "success"]);
    } else {
        header("Content-Type: application/json");
        http_response_code(500);
        echo json_encode(["status" => "error"]);
    }
} else {
    http_response_code(405);
    echo "Method Not Allowed";
}
?>
