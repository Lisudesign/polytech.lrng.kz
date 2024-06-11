<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JavaScript Quiz</title>
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
    <h1>JavaScript Quiz</h1>
    <div id="questionContainer" class="question"></div>
    <div id="result" class="result"></div>
    <button onclick="checkAnswer()">Отправить ответ</button>
  </div>

  <script>
    const questions = [
      {
        question: 'Что выведет следующий код: console.log(2 + 3 + "7")?',
        options: ['57', '10', '12', '23'],
        correctAnswer: '57'
      },
      {
        question: 'Какой метод используется для добавления элемента в конец массива в JavaScript?',
        options: ['add()', 'insert()', 'append()', 'push()'],
        correctAnswer: 'push()'
      },
      {
        question: 'Какое ключевое слово используется для создания переменной в JavaScript?',
        options: ['var', 'let', 'const', 'all of the above'],
        correctAnswer: 'all of the above'
      },
      {
        question: 'Что будет результатом выполнения следующего кода: typeof NaN?',
        options: ['number', 'NaN', 'undefined', 'object'],
        correctAnswer: 'number'
      },
      {
        question: 'Какой оператор используется для проверки равенства значений и типов в JavaScript?',
        options: ['==', '=', '===', '!=='],
        correctAnswer: '==='
      },
      {
        question: 'Как называется функция, которая вызывается сразу после её создания?',
        options: ['callback', 'recursive', 'IIFE', 'anonymous'],
        correctAnswer: 'IIFE'
      },
      {
        question: 'Какой метод используется для преобразования JSON-строки в объект?',
        options: ['JSON.parse()', 'JSON.stringify()', 'parseJSON()', 'stringifyJSON()'],
        correctAnswer: 'JSON.parse()'
      },
      {
        question: 'Какой оператор используется для проверки вхождения элемента в массив в JavaScript?',
        options: ['in', 'exists', 'includes', 'contains'],
        correctAnswer: 'includes'
      },
      {
        question: 'Какое значение возвращает функция, если в ней отсутствует оператор return?',
        options: ['undefined', 'null', '0', 'NaN'],
        correctAnswer: 'undefined'
      },
      {
        question: 'Что выведет следующий код: console.log(typeof null)?',
        options: ['null', 'undefined', 'object', 'boolean'],
        correctAnswer: 'object'
      },
      // Дополнительные вопросы...
      {
        question: 'Какой метод используется для удаления последнего элемента массива?',
        options: ['remove()', 'pop()', 'delete()', 'shift()'],
        correctAnswer: 'pop()'
      },
      {
        question: 'Какое значение присваивается переменной, если ей не назначено никакого значения?',
        options: ['null', '0', 'undefined', 'NaN'],
        correctAnswer: 'undefined'
      },
      {
        question: 'Какой оператор используется для объединения двух массивов?',
        options: ['concat()', 'combine()', 'merge()', 'join()'],
        correctAnswer: 'concat()'
      },
      {
        question: 'Что такое "объект" в JavaScript?',
        options: ['Коллекция свойств', 'Тип данных', 'Функция', 'Массив'],
        correctAnswer: 'Коллекция свойств'
      },
      {
        question: 'Какое ключевое слово используется для создания функции?',
        options: ['def', 'func', 'function', 'fun'],
        correctAnswer: 'function'
      },
      {
        question: 'Какой метод используется для удаления пробелов с начала и конца строки?',
        options: ['trim()', 'slice()', 'remove()', 'strip()'],
        correctAnswer: 'trim()'
      },
      {
        question: 'Какой метод используется для проверки, существует ли элемент в массиве?',
        options: ['exists()', 'isPresent()', 'has()', 'includes()'],
        correctAnswer: 'includes()'
      },
      {
        question: 'Какой метод используется для создания нового массива с результатами вызова функции для каждого элемента массива?',
        options: ['map()', 'forEach()', 'filter()', 'reduce()'],
        correctAnswer: 'map()'
      },
      {
        question: 'Какой метод используется для объединения всех элементов массива в строку?',
        options: ['concat()', 'join()', 'combine()', 'append()'],
        correctAnswer: 'join()'
      },
      {
        question: 'Что будет результатом выполнения следующего кода: Boolean("false")?',
        options: ['true', 'false', 'undefined', 'null'],
        correctAnswer: 'true'
      },
      {
        question: 'Какой метод используется для добавления одного или более элементов в начало массива?',
        options: ['unshift()', 'push()', 'shift()', 'append()'],
        correctAnswer: 'unshift()'
      },
      {
        question: 'Что будет результатом выполнения следующего кода: "Hello, World!".toLowerCase()?',
        options: ['hello, world!', 'HELLO, WORLD!', 'Hello, World!', 'hELLO, wORLD!'],
        correctAnswer: 'hello, world!'
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
