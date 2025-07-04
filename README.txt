Message Management System

Technologies Used:
- HTML, CSS, JavaScript
- PHP and MySQL

Features:
- Register/Login
- Send, View, Delete Messages
- Responsive Design

Database Setup:
1. Create database: message_db
2. Run:
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255),
    password VARCHAR(255)
);
CREATE TABLE messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    content TEXT,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

3. Update db.php with your credentials.

Host online at: https://infinityfree.net
