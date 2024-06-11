<?php
// Подключение к базе данных
$servername = "localhost";
$username = "root"; // Ваше имя пользователя БД
$password = ""; // Ваш пароль БД
$dbname = "your_database_name"; // Имя вашей базы данных

// Создание соединения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Получение user_id из запроса
$user_id = intval($_GET['user_id']);

// Запрос к базе данных для получения имени пользователя
$sql = "SELECT username FROM users WHERE id = $user_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Вывод имени пользователя
    $row = $result->fetch_assoc();
    echo $row['username'];
} else {
    echo "User";
}

$conn->close();
?>
