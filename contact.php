<?php
// OPTIONAL PHP mail handler for conventional PHP hosting.
// GitHub Pages and standard Vercel static deployments do not execute PHP.
header('Content-Type: application/json; charset=utf-8');
if ($_SERVER['REQUEST_METHOD'] !== 'POST') { http_response_code(405); echo json_encode(['ok'=>false,'message'=>'Method not allowed']); exit; }
$name = trim($_POST['name'] ?? '');
$email = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
$phone = trim($_POST['phone'] ?? '');
$message = trim($_POST['message'] ?? '');
if ($name === '' || !$email || $message === '') { http_response_code(422); echo json_encode(['ok'=>false,'message'=>'Please complete all required fields.']); exit; }
$to = 'marwan.aljabali.mg@hotmail.com';
$subject = 'Website enquiry from ' . $name;
$body = "Name: $name\nEmail: $email\nPhone: $phone\n\n$message";
$headers = "From: Website <noreply@" . ($_SERVER['HTTP_HOST'] ?? 'localhost') . ">\r\nReply-To: $email\r\n";
$sent = @mail($to, $subject, $body, $headers);
if ($sent) echo json_encode(['ok'=>true,'message'=>'Message sent.']); else { http_response_code(500); echo json_encode(['ok'=>false,'message'=>'Mail service is not configured on this server.']); }
