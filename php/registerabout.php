<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #876c99; /* Измененный цвет фона */
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            margin: 10px;
        }

        .container h2 {
            margin-top: 0;
            text-align: center;
            color: #333;
        }

        .container form {
            display: flex;
            flex-direction: column;
        }

        .container input[type="text"],
        .container input[type="password"],
        .container input[type="email"] {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 15px;
            font-size: 16px;
        }

        .container button {
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .container button:hover {
            background-color: #45a049;
        }

        .container p {
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Регистрация</h2>
        <form action="register.php" method="post">
            <input type="text" placeholder="Логин" name="login">
            <input type="password" placeholder="Пароль" name="pass">
            <input type="password" placeholder="Повторите пароль" name="repeatpass">
            <input type="email" placeholder="Email" name="email">
            <button type="submit">Зарегистрироваться</button>
        </form>
    </div>
    <div class="container">
        <h2>Вход</h2>
        <form action="/php/login.php" method="post">
            <input type="text" placeholder="Логин" name="login">
            <input type="password" placeholder="Пароль" name="pass">
            <button type="submit">Войти</button>
        </form>
    </div>
</body>

</html>
