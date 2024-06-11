<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Курсы</title>
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
      color: #000000;
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
      background: #000000;
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

    .more-courses-btn {
      display: block;
      margin: 30px auto;
      padding: 15px 30px;
      font-size: 18px;
      color: #fff;
      background-color: #f9004d;
      text-decoration: none;
      border-radius: 6px;
      transition: 0.3s;
      text-align: center;
    }

    .more-courses-btn:hover {
      background-color: #000000;
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
        
      </div>
      <a href="bilimalu.php" class="btn">⬅</a>
    </div>
    
    
    <div class="section">
      <h2>Курсы</h2>
      <div class="card-container">
        <div class="card">
          <h3>Курс по HTML</h3>
          <p>Перед вами - лучший и самый полный в сети учебник по HTML на русском языке из самого большого и самого популярного в мире Интернет-ресурса по изучению веб-технологий - сайта W3Schools.com.</p>
          <a href="https://open-source-peace.github.io/w3schoolsrus/html/index.html#gsc.tab=0">Пройти курс</a>
        </div>
        <div class="card">
          <h3>Курс по CSS</h3>
          <p>CSS (англ. Cascading Style Sheets, рус. Каскадные таблицы стилей) — специальный язык, который используется для описания внешнего вида страниц, написанных языками разметки данных</p>
          <a href="https://open-source-peace.github.io/w3schoolsrus/css/index.html#gsc.tab=0">Пройти курс</a>
        </div>
        <div class="card">
          <h3>Курс по JavaScript </h3>
          <p>Этот курс научит вас языку программирования JavaScript от базового уровня до профессионального.</p>
          <a href="https://open-source-peace.github.io/w3schoolsrus/js/index.html#gsc.tab=0">Пройти курс</a>
        </div>
        <div class="card">
          <h3>Курс по SQL</h3>
          <p>SQL - это стандартный язык для хранения, обработки и получения данных в базах данных.

Наш курс по SQL научит вас использовать SQL в: MySQL, SQL Server, MS Access, Oracle, Sybase, Informix, Postgres и других системах баз данных.</p>
          <a href="https://open-source-peace.github.io/w3schoolsrus/sql/index.html#gsc.tab=0">Пройти курс</a>
        </div>
        <div class="card">
          <h3>Курс по Python </h3>
          <p>Python - это язык программирования.

Python можно использовать на сервере для создания веб-приложений.</p>
          <a href="https://open-source-peace.github.io/w3schoolsrus/python/index.html#gsc.tab=0">Пройти курс</a>
        </div>
        <div class="card">
        <h3>Курс по Bootstrap</h3>
          <p>Bootstrap - это бесплатный CSS-фреймворк с открытым исходным кодом, предназначенный для адаптивной, ориентированной на мобильные устройства фронтальной веб-разработки. Он содержит HTML, CSS и (опционально) JavaScript-шаблоны дизайна для типографии, форм, кнопок, навигации и других компонентов интерфейса.</p>
          <a href="https://open-source-peace.github.io/w3schoolsrus/bootstrap/bootstrap_ver.html#gsc.tab=0">Пройти курс</a>
        </div>
        <div class="card">
          <h3>Курс по Java</h3
          >
          <p>Java - это язык программирования.

Java используется для разработки мобильных приложений, веб-приложений, настольных приложений, игр и многого другого.</p>
          <a href="https://open-source-peace.github.io/w3schoolsrus/java/index.html#gsc.tab=0">Пройти курс</a>
        </div>
        <div class="card">
          <h3>Курс по PHP</h3>
          <p>PHP - это серверный скриптовый язык и мощный инструмент для создания динамичных и интерактивных веб-страниц.

PHP - широко используемая, бесплатная и эффективная альтернатива конкурентам, таким как Microsoft ASP.

PHP 7 - последняя стабильная версия*.</p>
          <a href="https://open-source-peace.github.io/w3schoolsrus/php/index.html#gsc.tab=0">Пройти курс</a>
        </div>
      </div>
    </div>
    

    <a href="https://open-source-peace.github.io/w3schoolsrus/index.html" class="more-courses-btn">ЕЩЕ БОЛЬШЕ КУРСОВ</a>
    
  </div>
</body>
</html>
