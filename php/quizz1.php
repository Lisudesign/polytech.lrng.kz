<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Python Quiz</title>
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
    <h1>Python Quiz</h1>
    <div id="questionContainer" class="question"></div>
    <div id="result" class="result"></div>
    <button onclick="checkAnswer()">Отправить ответ</button>
  </div>

  <script>
    const questions = [
      {
        question: 'Что выведет следующий код: print(2 ** 3)?',
        options: ['5', '6', '8', '9'],
        correctAnswer: '8'
      },
      {
        question: 'Какой тип данных в Python используется для хранения текстовых данных?',
        options: ['int', 'float', 'str', 'list'],
        correctAnswer: 'str'
      },
      {
        question: 'Какой оператор используется в Python для присваивания значения переменной?',
        options: ['-', '=', ':', '+'],
        correctAnswer: '='
      },
      {
        question: 'Какой метод используется для добавления элемента в конец списка в Python?',
        options: ['add()', 'insert()', 'append()', 'push()'],
        correctAnswer: 'append()'
      },
      {
        question: 'Как называется функция, которая вызывает саму себя в Python?',
        options: ['self()', 'recursive()', 'call()', 'lambda()'],
        correctAnswer: 'recursive()'
      },
      {
        question: 'Что будет результатом выполнения следующего кода: "Python".upper()?',
        options: ['"PYTHON"', '"python"', '"pYTHON"', '"Python"'],
        correctAnswer: '"PYTHON"'
      },
      {
        question: 'Какой оператор используется для сравнения значений в Python?',
        options: ['==', '=', '===', '!='],
        correctAnswer: '=='
      },
      {
        question: 'Какой метод используется для удаления элемента из списка в Python?',
        options: ['remove()', 'delete()', 'pop()', 'clear()'],
        correctAnswer: 'remove()'
      },
      {
        question: 'Какой тип данных используется для хранения неизменяемых последовательностей в Python?',
        options: ['list', 'tuple', 'set', 'dictionary'],
        correctAnswer: 'tuple'
      },
      {
        question: 'Что будет результатом выполнения следующего кода: len("Python")?',
        options: ['4', '6', '7', '5'],
        correctAnswer: '6'
      },
      // Дополнительные вопросы...
      {
        question: 'Какой оператор используется для объединения двух списков в Python?',
        options: ['merge()', 'concat()', 'combine()', 'extend()'],
        correctAnswer: 'extend()'
      },
      {
        question: 'Какой метод используется для разделения строки на подстроки?',
        options: ['split()', 'separate()', 'slice()', 'divide()'],
        correctAnswer: 'split()'
      },
      {
        question: 'Какое ключевое слово используется для создания пустой функции в Python?',
        options: ['void', 'empty', 'null', 'pass'],
        correctAnswer: 'pass'
      },
      {
        question: 'Какие скобки используются для создания кортежа в Python?',
        options: ['[ ]', '{ }', '( )', '< >'],
        correctAnswer: '( )'
      },
      {
        question: 'Какой оператор используется для проверки вхождения элемента в список?',
        options: ['in', 'exists', 'inside', 'contains'],
        correctAnswer: 'in'
      },
      {
        question: 'Какой метод используется для преобразования строки в целое число в Python?',
        options: ['int()', 'parse()', 'convert()', 'toInteger()'],
        correctAnswer: 'int()'
      },
      {
        question: 'Как называется цикл, который выполняется определенное количество раз в Python?',
        options: ['for', 'do while', 'repeat until', 'while'],
        correctAnswer: 'for'
      },
      {
        question: 'Какой тип данных используется для хранения уникальных элементов в Python?',
        options: ['set', 'dict', 'unique', 'collection'],
        correctAnswer: 'set'
      },
      {
        question: 'Что будет результатом выполнения следующего кода: "Python"[2:4]?',
        options: ['Py', 'th', 'tho', 'tho'],
        correctAnswer: 'th'
      },
      {
        question: 'Какой метод используется для обновления значения элемента словаря в Python?',
        options: ['update()', 'set()', 'change()', 'modify()'],
        correctAnswer: 'update()'
      },
      {
        question: 'Что будет результатом выполнения следующего кода: "hello".capitalize()?',
        options: ['hello', 'Hello', 'HELLO', 'hELLO'],
        correctAnswer: 'Hello'
      },
      {
        question: 'Какой оператор используется для доступа к элементу по его индексу в списке?',
        options: ['&', '*', '@', '#'],
        correctAnswer: '@'
      },
      {
        question: 'Какой метод используется для удаления всех элементов из списка?',
        options: ['clear()', 'deleteAll()', 'removeAll()', 'purge()'],
        correctAnswer: 'clear()'
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
