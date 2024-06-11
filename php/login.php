<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Simple Website Design</title>
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
        require_once('db.php');

        $message = '';
        $messageType = '';
        $userName = ''; // Initialize userName variable

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $login = $_POST['login'];
            $pass = $_POST['pass'];

            if (empty($login) || empty($pass)) {
                $message = "Заполните все поля";
                $messageType = "error";
            } else {
                // Подготовленный запрос для проверки пользователя
                $stmt = $conn->prepare("SELECT * FROM `users` WHERE login = ? AND pass = ?");
                $stmt->bind_param("ss", $login, $pass);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $userName = $row['login']; // Set the username
                    $message = "Добро пожаловать в POLYTECH.LRNG, " . $row['login'];
                    $messageType = "success";
                } else {
                    $message = "Нет такого пользователя";
                    $messageType = "error";
                }

                $stmt->close();
            }

            $conn->close();
        }
        ?>
        <?php if (!empty($userName)) : ?>
          <span class="username"><?php echo $userName; ?></span>
          <!-- If the user's profile image is stored in the database, you can retrieve and display it here -->
          <!-- Example: <img src="path_to_user_image.jpg" alt="User Image"> -->
        <?php else : ?>
          <span class="username">Username</span>
        <?php endif; ?>
      </div>
    </nav>
    <div class="content">
      <h2>Sälem<br>Bul veb-sayt siz bilim alw üşin jasalğan</h2>
      <p>Целью проекта "Интерактивные учебные ресурсы" является создание образовательной платформы, которая предоставляет студентам всех уровней обучения доступ к качественным и разнообразным учебным материалам.</p>
    </div>
    <div class="link">
      
  
    </div>
  </div>
</body>
</html>
