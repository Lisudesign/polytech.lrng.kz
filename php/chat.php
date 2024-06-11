<?php
// Функция для загрузки сообщений из файла
function loadMessages($file) {
    if (file_exists($file)) {
        return file_get_contents($file);
    } else {
        return "";
    }
}

// Функция для сохранения сообщений в файл
function saveMessage($file, $message) {
    file_put_contents($file, $message, FILE_APPEND);
}

// Путь к файлу для сохранения сообщений
$file = "messages.txt";

// Проверка, была ли отправлена форма
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["message"])) {
    // Получение отправленного сообщения
    $message = $_POST["message"];
    
    // Добавление даты и времени к сообщению
    $message = "[" . date("Y-m-d H:i:s") . "] " . $message . "\n";
    
    // Сохранение сообщения в файл
    saveMessage($file, $message);
}

// Загрузка всех сообщений из файла
$chatContent = loadMessages($file);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Простой чат</title>
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
            background-color: #2a2a72;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            width: 100%;
            max-width: 800px;
            padding: 20px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            display: flex;
            flex-direction: column;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .header a {
            background: #ff6b6b;
            border-radius: 30px;
            padding: 10px 20px;
            text-decoration: none;
            font-size: 18px;
            color: #fff;
            transition: 0.3s;
        }

        .header a:hover {
            background: #ff4757;
        }

        .header h2 {
            font-size: 24px;
        }

        .chat-box {
            flex-grow: 1;
            background: #f1f1f1;
            border-radius: 10px;
            padding: 20px;
            color: #000;
            overflow-y: auto;
            margin-bottom: 20px;
            box-shadow: inset 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .message {
            margin-bottom: 15px;
            display: flex;
            align-items: flex-end;
        }

        .message.user {
            justify-content: flex-end;
        }

        .message p {
            max-width: 70%;
            display: inline-block;
            background: #667eea;
            color: #fff;
            padding: 10px 15px;
            border-radius: 20px;
            position: relative;
            word-wrap: break-word;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .message.user p {
            background: #ff6b6b;
        }

        .message-input {
            display: flex;
            border-radius: 30px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .message-input input {
            flex-grow: 1;
            padding: 15px 20px;
            border: none;
            outline: none;
            font-size: 16px;
        }

        .message-input button {
            background: #ff6b6b;
            padding: 15px 20px;
            border: none;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        .message-input button:hover {
            background: #ff4757;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <a href="webinars.php">⬅ Назад</a>
        <h2>Чат</h2>
    </div>
    <div class="chat-box" id="chat-window" style="height: 300px; overflow-y: scroll;">
        <?php echo nl2br($chatContent); ?>
    </div>
    <form method="post" action="" class="message-input">
        <input type="text" name="message" placeholder="Введите сообщение" required style="flex-grow: 1; padding: 15px 20px; border: none; outline: none; font-size: 16px;">
        <button type="submit" style="background: #ff6b6b; padding: 15px 20px; border: none; color: #fff; font-size: 16px; cursor: pointer; transition: 0.3s;">Отправить</button>
    </form>
</div>
</body>
</html>
