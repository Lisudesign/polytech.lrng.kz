<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>C++ Quiz</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Karla:wght@300;400;500;600;700&display=swap');
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Karla', sans-serif;
    }
    body {
      background-color: #876c99;
      color: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      padding: 20px;
    }
    .container {
      background-color: #fff;
      color: #000;
      padding: 20px;
      border-radius: 8px;
      max-width: 800px;
      width: 100%;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      margin: auto;
    }
    h1 {
      text-align: center;
      color: #f9004d;
      margin-bottom: 20px;
    }
    .question {
      margin-bottom: 15px;
    }
    .question p {
      font-weight: bold;
    }
    .options {
      display: flex;
      flex-direction: column;
    }
    .options label {
      margin-bottom: 5px;
    }
    .result {
      margin-top: 20px;
      text-align: center;
      font-size: 18px;
      font-weight: bold;
    }
    button {
      display: block;
      margin: 20px auto;
      padding: 10px 20px;
      background-color: #f9004d;
      color: #fff;
      text-align: center;
      border-radius: 5px;
      border: none;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    button:hover {
      background-color: #c20039;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>C++ Quiz</h1>
    <div id="questionContainer" class="question"></div>
    <div id="result" class="result"></div>
    <button onclick="checkAnswer()">Отправить ответ</button>
  </div>

  <script>
    const questions = [
      {
        question: 'Что такое C++?',
        options: ['Язык программирования', 'Модель баз данных', 'ОС', 'Фреймворк'],
        correctAnswer: 'Язык программирования'
      },
      {
        question: 'Какой символ используется для комментирования однострочных комментариев в C++?',
        options: ['//', '--', '/*', '#'],
        correctAnswer: '//'
      },
      {
        question: 'Как называется функция, которая вызывается автоматически при создании объекта в C++?',
        options: ['constructor', 'initialize', 'init', 'setup'],
        correctAnswer: 'constructor'
      },
      {
        question: 'Какой оператор используется для условного выполнения кода в C++?',
        options: ['if', 'for', 'while', 'switch'],
        correctAnswer: 'if'
      },
      {
        question: 'Какой символ используется для создания комментариев в несколько строк в C++?',
        options: ['/* */', '//', '/**/', '#'],
        correctAnswer: '/* */'
      },
      // Дополнительные вопросы...
      {
        question: 'Какой тип данных используется для хранения целых чисел в C++?',
        options: ['int', 'float', 'double', 'string'],
        correctAnswer: 'int'
      },
      {
        question: 'Что делает оператор "new" в C++?',
        options: ['Выделяет память для объекта', 'Удаляет объект из памяти', 'Определяет новый тип данных', 'Создает новую переменную'],
        correctAnswer: 'Выделяет память для объекта'
      },
      {
        question: 'Как называется оператор, который используется для взятия адреса переменной в C++?',
        options: ['&', '*', '@', '#'],
        correctAnswer: '&'
      },
      {
        question: 'Какой символ используется для выполнения операции умножения в C++?',
        options: ['*', '+', '-', '/'],
        correctAnswer: '*'
      },
      {
        question: 'Какой метод используется для преобразования строки в число в C++?',
        options: ['stoi()', 'convert()', 'parseInt()', 'toInteger()'],
        correctAnswer: 'stoi()'
      }
    ];

    let currentQuestionIndex = 0;
    let score = 0;

    const questionContainer = document.getElementById('questionContainer');
    const resultContainer = document.getElementById('result');

    function displayQuestion() {
      const currentQuestion = questions[currentQuestionIndex];
      const optionsHtml = currentQuestion.options.map((option, index) => `
        <label>
          <input type="radio" name="answer" value="${option}">
          ${option}
        </label>
      `).join('');
      const questionHtml = `
        <div class="question">
          <p>${currentQuestion.question}</p>
          <div class="options">${optionsHtml}</div>
        </div>
      `;
      questionContainer.innerHTML = questionHtml;
    }

    function checkAnswer() {
      const selectedOption = document.querySelector('input[name="answer"]:checked');
      if (!selectedOption) {
        return alert('Выберите один из вариантов ответа!');
      }
      const userAnswer = selectedOption.value;
      const correctAnswer = questions[currentQuestionIndex].correctAnswer;
      if (userAnswer === correctAnswer) {
        score++;
      }
      currentQuestionIndex++;
      if (currentQuestionIndex < questions.length) {
        displayQuestion();
      } else {
        displayResult();
      }
    }

    function displayResult() {
      const percentage = (score / questions.length) * 100;
      const resultHtml = `Правильных ответов: ${score} из ${questions.length} (${percentage.toFixed(2)}%)`;
      resultContainer.textContent = resultHtml;
    }

    displayQuestion();
  </script>
</body>
</html>
