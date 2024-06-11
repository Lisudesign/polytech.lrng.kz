<?php
$host = 'localhost'; // Имя хоста базы данных
$username = '123'; // Имя пользователя базы данных
$password = '123'; // Пароль базы данных
$database = 'root'; // Имя базы данных

// Подключение к базе данных
$conn = new mysqli($host, $username, $password, $database);

// Проверка соединения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
