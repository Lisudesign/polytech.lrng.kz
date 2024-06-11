<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Викторина</title>
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
    }

    .card:hover {
      transform: translateY(-10px);
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
    }

    .card img {
      width: 100%;
      height: 150px;
      object-fit: cover;
      border-radius: 10px 10px 0 0;
      margin-bottom: 15px;
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
      color: #f9004d;
      font-weight: bold;
      transition: 0.3s;
    }

    .card a:hover {
      color: #e0003d;
    }

  </style>
</head>
<body>
  <div class="container">
    <div class="header">
      <div class="logo">
        <a href="#">Polytech<span>.quiz</span></a>
      </div>
      <div class="nav-links">
        <a href="quiz.php"></a>
      </div>
      
    </div>
    
    <div class="section">
      <h2>Викторина</h2>
      <div class="card-container">
        <div class="card">
          <img src="https://d3mxt5v3yxgcsr.cloudfront.net/courses/15007/course_15007_image.png" alt="Python">
          <h3>Знаете ли вы Python</h3>
          <p>Добро пожаловать на увлекательную викторину, посвященную одному из самых популярных языков программирования — Python! Эта викторина предназначена как для новичков, так и для опытных программистов, желающих проверить свои знания и пополнить багаж новых фактов о Python.</p>
          <a href="quizz1.php">Играть</a>
        </div>
        <div class="card">
          <img src="https://i.pinimg.com/originals/36/d0/be/36d0bec02b140c6a3fc167665a060f28.png" alt="JavaScript">
          <h3>Знаете ли вы JavaScript</h3>
          <p>Добро пожаловать на захватывающую викторину, посвященную JavaScript — одному из самых популярных языков программирования в мире! Эта викторина создана для всех, кто хочет проверить свои знания и навыки в JavaScript, будь то новичок или опытный разработчик.</p>
          <a href="quizz2.php">Играть</a>
        </div>
        <div class="card">
          <img src="https://img2.freepng.ru/20180508/zae/kisspng-php-computer-icons-computer-programming-installati-5af223a3eb3830.3457727815258182759635.jpg" alt="PHP">
          <h3>Знаете ли вы PHP?</h3>
          <p>Добро пожаловать на захватывающую викторину, посвященную PHP — одному из самых популярных языков программирования для веб-разработки! Эта викторина создана для всех, кто хочет проверить свои знания и навыки в PHP, будь то новичок или опытный разработчик.</p>
          <a href="quizz3.php">Играть</a>
        </div>
        <div class="card">
          <img src="https://ylianova.ru/800/600/https/apprendre-a-coder.com/wp/wp-content/uploads/2015/08/cours1.png" alt="HTML и CSS">
          <h3>Викторина по HTML и CSS</h3>
          <p>Эта викторина предназначена для проверки и улучшения ваших знаний по HTML и CSS — основным технологиям веб-разработки. Викторина состоит из 20 вопросов, каждый из которых предлагает несколько вариантов ответа. Вам предстоит выбрать правильный вариант для каждого вопроса.</p>
          <a href="quizz4.php">Играть</a>
        </div>
        <div class="card">
          <img src="https://pq.hosting/uploads/posts/2023-02/1675364747_1o.jpg" alt="MySQL">
          <h3>MySQL База данных</h3>
          <p>Добро пожаловать в викторину по MySQL! Этот тест позволит вам проверить ваши знания в области работы с базами данных MySQL. Викторина состоит из 20 вопросов с несколькими вариантами ответа. Ваша задача выбрать правильный ответ на каждый вопрос.</p>
          <a href="quizz5.php">Играть</a>
        </div>
        <div class="card">
          <img src="https://www.jetbrains.com/teamcity/integrations/build-tools/img/c_sharp_logo.png" alt="C#">
          <h3>Викторина по С#</h3>
          <p> Добро пожаловать в викторину по языку программирования C#! Этот тест позволит вам проверить ваши знания и умения в области программирования на C#. Викторина состоит из нескольких вопросов с вариантами ответов. Ваша задача выбрать правильный ответ на каждый вопрос.</p>
          <a href="quizz6.php">Играть</a>
        </div>
        <div class="card">
          <img src="https://w7.pngwing.com/pngs/646/751/png-transparent-the-c-programming-language-computer-programming-programmer-others-blue-class-logo.png" alt="C++">
          <h3>Викторина по С++</h3>
          <p>Добро пожаловать в викторину по языку программирования C++! Этот тест поможет вам проверить ваши знания и понимание основных концепций языка C++. Виктор
          <a href="quizz7.php">Играть</a>
        </div>
        <div class="card">
          <img src="https://user-images.githubusercontent.com/50112565/70425133-f92a7980-1ab3-11ea-85b9-23d5dd68d49e.png" alt="Java">
          <h3>Викторина по Java</h3>
          <p>Добро пожаловать в викторину по языку программирования Java! Этот тест позволит вам проверить и расширить ваши знания о Java. Викторина состоит из нескольких вопросов с вариантами ответов.</p>
          <a href="quizz8.php">Играть</a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
