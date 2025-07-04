<?php
session_start();
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $msg = $_POST['message'];
    $uid = $_SESSION['user'];
    $conn->query("INSERT INTO messages (user_id, content) VALUES ('$uid', '$msg')");
    echo "Message Sent!";
}
?>
<form method="post">
  <textarea name="message" required></textarea>
  <button type="submit">Send</button>
</form>
