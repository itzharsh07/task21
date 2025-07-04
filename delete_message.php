<?php
session_start();
include 'db.php';
$id = $_GET['id'];
$uid = $_SESSION['user'];
$conn->query("DELETE FROM messages WHERE id='$id' AND user_id='$uid'");
header("Location: view_messages.php");
?>
