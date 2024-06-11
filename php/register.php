<?php
session_start();
require_once('db.php');

$message = '';
$messageType = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['login'];
    $pass = $_POST['pass'];
    $repeatpass = $_POST['repeatpass'];
    $email = $_POST['email'];

    if (empty($login) || empty($pass) || empty($repeatpass) || empty($email)) {
        $message = "Заполните пропущенные поля";
        $messageType = "error";
    } else {
        if ($pass != $repeatpass) {
            $message = "Пароли не совпадают";
            $messageType = "error";
        } else {
            $sql = "INSERT INTO `users` (login, pass, email) VALUES ('$login', '$pass', '$email')";
            if ($conn->query($sql) === TRUE) {
                $_SESSION['username'] = $login; // Set the username in session
                header("Location: " . $_SERVER['PHP_SELF']); // Redirect to the same page
                exit();
            } else {
                $message = "Ошибка: " . $conn->error;
                $messageType = "error";
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Karla:wght@300;400;500;600;700&display=swap');
        @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Karla', sans-serif;
        }
        body {
            color: #fff;
            background-color: #876c99;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            width: 90%;
            max-width: 1200px;
            background: rgba(0, 0, 0, 0.7);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            text-align: center;
        }
        nav {
            padding: 10px 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 40px;
        }
        .logo {
            display: flex;
            align-items: center;
        }
        .logo a {
            font-size: 40px;
            text-decoration: none;
            color: #fff;
        }
        .logo span {
            color: #f9004d;
        }
        nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
        }
        nav ul li a {
            text-decoration: none;
            color: #fff;
            font-size: 18px;
            transition: 0.3s;
        }
        nav ul li a:hover {
            color: #f9004d;
        }
        .btn {
            background: #f9004d;
            border-radius: 6px;
            padding: 10px 20px;
            text-decoration: none;
            font-size: 18px;
            color: #fff;
            transition: 0.3s;
        }
        .btn:hover {
            background: #e0003d;
        }
        .content h2 {
            font-size: 48px;
            margin-bottom: 20px;
        }
        .content p {
            margin: 20px 0;
            font-size: 20px;
            line-height: 1.6;
        }
        .link .hire {
            display: inline-block;
            margin-top: 20px;
            background: #fff;
            color: #000;
            padding: 10px 30px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }
        .link .hire:hover {
            background: transparent;
            border: 1px solid #fff;
            color: #fff;
        }

        .message-container {
            text-align: center;
            max-width: 400px;
            margin-bottom: 20px;
        }
        .message {
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease-in-out;
            margin-bottom: 10px;
        }
        .message.success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            font-size: 20px;
            font-weight: bold;
        }
        .message.error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
            font-size: 18px;
        }
        .message.success:hover, .message.error:hover {
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }
        .back-button {
            padding: 10px 20px;
            background-color: #fff;
            color: #000;
            border: 2px solid #000;
            border-radius: 5px;
            text-decoration: none;
            font-size: 18px;
            transition: background-color 0.3s, color 0.3s;
            display: inline-block;
        }
        .back-button:hover {
            background-color: #000;
            color: #fff;
        }

        /* User Profile Styles */
        .user-profile {
            display: flex;
            align-items: center;
        }

        .username {
            margin-right: 10px;
            font-size: 24px; /* Увеличиваем размер шрифта */
            color: #fff;
            text-transform: uppercase; /* Преобразуем текст в верхний регистр */
        }

        .user-profile img {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            object-fit: cover;
        }
    </style>
</head>
<body>
  <div class="container">
    <nav>
      <div class="logo">
        <a href="#">Polytech<span>.lrng</span></a>
      </div>
      <ul>
      <li><a href="#">Главная</a></li>
        <li><a href="bilimalu.php">Ресурсы</a></li>
        <li><a href="доска.php">Релаксация</a></li>
        <li><a href="todolist.php">To Do LIST</a></li>
        <li><a href="chat.php">Общий чат</a></li>
      </ul>
      <!-- User Profile Section -->
      <div class="user-profile">
        <?php
        if (isset($_SESSION['username'])) {
            echo '<span class="username">' . $_SESSION['username'] . '</span>';
            // If the user's profile image is stored in the database, you can retrieve and display it here
            // Example: <img src="path_to_user_image.jpg" alt="User Image">
        } else {
            echo '<span class="username">Username</span>';
        }
        ?>
      </div>
    </nav>
    <div class="content">
      <h2>Sälem<br>Bul veb-sayt siz bilim alw üşin jasalğan</h2>
      <p>Целью проекта "Интерактивные учебные ресурсы" является создание образовательной платформы, которая предоставляет студентам всех уровней обучения доступ к качественным и разнообразным учебным материалам.</p>
    </div>
    
  </div>
</body>
</html>

