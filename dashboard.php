<?php
session_start();
if (!isset($_SESSION['user'])) header("Location: login.php");
?>
<h2>Dashboard</h2>
<a href="send_message.php">Send Message</a> | 
<a href="view_messages.php">View Messages</a> | 
<a href="logout.php">Logout</a>
