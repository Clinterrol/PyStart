<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name    = htmlspecialchars(trim($_POST['name'] ?? ''));
  $email   = htmlspecialchars(trim($_POST['email'] ?? ''));
  $subject = htmlspecialchars(trim($_POST['subject'] ?? ''));
  $message = htmlspecialchars(trim($_POST['message'] ?? ''));

  if (empty($name) || empty($email) || empty($subject) || empty($message)) {
    echo "<p style='color:red;font-family:sans-serif;'>Error: All fields are required.</p>";
    echo "<a href='index.html'>Go back</a>";
    exit;
  }

  echo "<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='UTF-8'>
  <title>Message Received — PyIntro</title>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css'>
  <link rel='stylesheet' href='css/custom.css'>
</head>
<body>
<nav class='navbar navbar-expand-lg'>
  <div class='container'>
    <a class='navbar-brand' href='index.html'>🐍 PyIntro</a>
  </div>
</nav>
<div class='container text-center mt-5' style='max-width:600px;'>
  <i class='fas fa-check-circle fa-4x mb-3' style='color:#306998;'></i>
  <h2 class='section-title'>Thank you, $name!</h2>
  <div class='section-divider'></div>
  <p>We received your message about <strong>$subject</strong>.</p>
  <p>We will get back to you at <strong>$email</strong> as soon as possible.</p>
  <p class='text-muted fst-italic'>Your message: \"$message\"</p>
  <a href='index.html' class='btn btn-python mt-3'>Back to Home</a>
</div>
</body>
</html>";
} else {
  header("Location: index.html");
}
?>
