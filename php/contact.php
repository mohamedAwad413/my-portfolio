<?php
$conn = new mysqli("localhost", "root", "", "portfolio");

if ($conn->connect_error) {
  die("فشل الاتصال: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
  echo "تم إرسال الرسالة بنجاح!";
} else {
  echo "حدث خطأ أثناء الإرسال: " . $conn->error;
}

$conn->close();
?>
