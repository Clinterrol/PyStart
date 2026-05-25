<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name    = htmlspecialchars(trim($_POST['name'] ?? ''));
  $email   = htmlspecialchars(trim($_POST['email'] ?? ''));
  $subject = htmlspecialchars(trim($_POST['subject'] ?? ''));
  $message = htmlspecialchars(trim($_POST['message'] ?? ''));

  if (empty($name) || empty($email) || empty($subject) || empty($message)) {
    echo "<!DOCTYPE html><html><head><meta charset='UTF-8'><title>Error</title>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css'>
    <link rel='stylesheet' href='css/custom.css'></head><body>
    <div class='container text-center mt-5'>
    <h4 style='color:red;'>Error: All fields are required.</h4>
    <a href='index.html' class='btn-start mt-3 d-inline-block'>Go Back</a>
    </div></body></html>";
    exit;
  }

  echo "<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='UTF-8'>
  <title>Message Received — PyStart</title>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css'>
  <link rel='stylesheet' href='css/custom.css'>
</head>
<body>
<nav class='navbar navbar-expand-lg'>
  <div class='container'>
    <a class='navbar-brand' href='index.html'><i class='fab fa-python'></i>Py<span>Start</span></a>
  </div>
</nav>
<div class='container text-center mt-5' style='max-width:600px;'>
  <div style='font-size:4rem; color:#FFD43B; margin-bottom:20px;'><i class='fas fa-check-circle'></i></div>
  <h2 style='color:#0d1b2e; font-weight:800;'>Thank you, $name!</h2>
  <p style='color:#555; margin-top:12px;'>We received your message about <strong>$subject</strong>.</p>
  <p style='color:#555;'>We will get back to you at <strong>$email</strong> as soon as possible.</p>
  <p style='color:#999; font-style:italic; font-size:0.9rem;'>Your message: \"$message\"</p>
  <a href='index.html' class='btn-start mt-4 d-inline-flex'><i class='fas fa-home me-2'></i>Back to Home</a>
</div>
</body></html>";
} else {
  header("Location: index.html");
}
?>