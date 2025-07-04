<?php
session_start();
include 'db.php';
$uid = $_SESSION['user'];
$result = $conn->query("SELECT * FROM messages WHERE user_id='$uid'");
while ($row = $result->fetch_assoc()) {
    echo "<p>{$row['content']} <a href='delete_message.php?id={$row['id']}'>Delete</a></p>";
}
?>
