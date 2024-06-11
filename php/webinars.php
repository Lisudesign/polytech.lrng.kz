<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Вебинары</title>
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

    .card iframe {
      width: 100%;
      height: 200px;
      border-radius: 10px;
      margin-bottom: 15px;
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
      <h2>Вебинары</h2>
      <div class="card-container">
        <div class="card">
          <iframe src="https://www.youtube.com/embed/HMYbYXXDly4?si=UkHIG9UpyZDrayGL" frameborder="0" allowfullscreen></iframe>
          <h3>Вебинар 1</h3>
          <p>Какой язык программирования выбрать новичку
          </p>
         
        </div>
        <div class="card">
          <iframe src="https://www.youtube.com/embed/Xiy8xwhbmew?si=DJrPvExtH127Bjyg" frameborder="0" allowfullscreen></iframe>
          <h3>Вебинар 2</h3>
          <p>Как бы я изучал программирование (если бы мог начать все сначала)
          </p>
          
        </div>
        <div class="card">
          <iframe src="https://www.youtube.com/embed/Vzih__rDC7c?si=srntyP4shu4dI6Ea" frameborder="0" allowfullscreen></iframe>
          <h3>Вебинар 3</h3>
          <p>Какой язык программирования УЧИТЬ ПЕРВЫМ? | Для новичков
          </p>
          
        </div>
        <div class="card">
          <iframe src="https://www.youtube.com/embed/LufZgg5XCPg?si=xa3wfPzFSSVdqyqm" frameborder="0" allowfullscreen></iframe>
          <h3>Вебинар 4</h3>
          <p>Выбираем язык программирования</p>
          
        </div>
        <div class="card">
          <iframe src="https://www.youtube.com/embed/HQULZLebAvM?si=Wh_uab4zQLfEPWXB" frameborder="0" allowfullscreen></iframe>
          <h3>Вебинар 5</h3>
          <p>Язык программирования Golang - что на нем пишут, чем он хорош, зарплаты разработчиков
          </p>
          
        </div>
        <div class="card">
          <iframe src="https://www.youtube.com/embed/pzIRSleryNw?si=pP32GR4T0SAJn_Pn" frameborder="0" allowfullscreen></iframe>
          <h3>Вебинар 6</h3>
          <p>Язык Программирования RUST за 3 минуты
          </p>
          
        </div>
        <div class="card">
          <iframe src="https://www.youtube.com/embed/44vDOqeJCo0?si=wOzmCJZb1Tp7rr_i" frameborder="0" allowfullscreen></iframe>
          <h3>Вебинар 7</h3>
          <p>ЯЗЫК ПРОГРАММИРОВАНИЯ GO(GOLANG) за 3 МИНУТЫ
          </p>
          
        </div>
        <div class="card">
          <iframe src="https://www.youtube.com/embed/4T5eQQ4FO98?si=35FPbV2PNGxD8lT3" frameborder="0" allowfullscreen></iframe>
          <h3>Вебинар 8</h3>
          <p>Курсы по программированию или самостоятельно? Как учиться программировать.
</p>
          <a href="#"></a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
