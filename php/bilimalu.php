<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Курсы, Вебинары и Викторины</title>
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
      flex-direction: column;
      min-height: 100vh;
    }

    .container {
      width: 90%;
      max-width: 1200px;
      padding: 20px;
      background: rgba(0, 0, 0, 0.7);
      border-radius: 10px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
    }

    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 30px;
    }

    .logo a {
      font-size: 40px;
      text-decoration: none;
      color: #fff;
    }

    .logo span {
      color: #f9004d;
    }

    .nav-links {
      display: flex;
      gap: 20px;
    }

    .nav-links a {
      text-decoration: none;
      color: #fff;
      font-size: 18px;
      transition: 0.3s;
    }

    .nav-links a:hover {
      color: #876c99;
    }

    .btn {
      background: #876c99;
      border-radius: 6px;
      padding: 10px 20px;
      text-decoration: none;
      font-size: 18px;
      color: #fff;
      transition: 0.3s;
    }

    .btn:hover {
      background: #876c99;
    }

    .section {
      margin-bottom: 50px;
    }

    .section h2 {
      font-size: 36px;
      margin-bottom: 20px;
      text-align: center;
    }

    .card-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
    }

    .card {
      background: #fff;
      color: #000;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
      text-align: center;
      transition: 0.3s;
      position: relative;
    }

    .card:hover {
      transform: translateY(-10px);
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
    }

    .card h3 {
      margin-bottom: 15px;
      font-size: 24px;
    }

    .card p {
      margin-bottom: 20px;
      font-size: 16px;
      line-height: 1.5;
    }

    .card a {
      text-decoration: none;
      color: #000000;
      font-weight: bold;
      transition: 0.3s;
    }

    .card a:hover {
      color: #000000;
    }

    .profile-btn {
      background: #876c99;
      border-radius: 50%;
      padding: 10px;
      text-decoration: none;
      font-size: 18px;
      color: #fff;
      transition: 0.3s;
      display: inline-block;
      margin-top: 10px;
      width: 40px;
      height: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
      position: absolute;
      right: 20px;
      bottom: 20px;
    }

    .profile-btn:hover {
      background: #e0003d;
    }

    .video-container {
      position: relative;
      padding-bottom: 56.25%; /* 16:9 aspect ratio */
      padding-top: 25px;
      height: 0;
    }

    .video-container iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
    }

  </style>
</head>
<body>
  <div class="container">
    <div class="header">
      <div class="logo">
        <a href="#">Polytech<span>.lrng</span></a>
      </div>
      <div class="nav-links">
      <li><a href="courses.php">Courses</a>
        <li> <a href="webinars.php">Webinar</a>
        <li><a href="resources.php">Victoriny</a>
        <li><a href="доска.php">Релаксация</a></li>
        <li><a href="todolist.php">To Do LIST</a></li>
        <li><a href="chat.php">Общий чат</a></li>
      </div>
      <a href="courses.php" class="btn">⭢</a>

    </div>
    
    <div class="section">
      <h2>Ресурсы</h2>
      <div class="card-container">
        <div class="card">
          <h3>Курс по HTML</h3>
          <p>Перед вами - лучший и самый полный в сети учебник по HTML на русском языке из самого большого и самого популярного в мире Интернет-ресурса по изучению веб-технологий - сайта W3Schools.com.</p>
          <a href="https://open-source-peace.github.io/w3schoolsrus/html/index.html#gsc.tab=0">Пройти курс</a>
        </div>
      </div>
    </div>

    <div class="section">
      <h2>Вебинары</h2>
      <div class="video-container">
        <iframe src="https://www.youtube.com/embed/HMYbYXXDly4?si=UkHIG9UpyZDrayGL" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>

    <div class="section">
      <h2>Викторины</h2>
      <div class="card-container">
      <div class="card">
  <h3>Знаете ли вы Python</h3>
  <p>Добро пожаловать на увлекательную викторину, посвященную одному из самых популярных языков программирования — Python! Эта викторина предназначена как для новичков, так и для опытных программистов, желающих проверить свои знания и пополнить багаж новых фактов о Python.</p>
  <a href="quizz1.php">Играть</a>
</div>

