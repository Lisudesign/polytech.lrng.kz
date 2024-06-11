<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HTML & CSS Quiz</title>
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
    <h1>HTML & CSS Quiz</h1>
    <div id="questionContainer" class="question"></div>
    <div id="result" class="result"></div>
    <button onclick="checkAnswer()">Отправить ответ</button>
  </div>

  <script>
    const questions = [
      {
        question: 'Какой тег используется для создания гиперссылки в HTML?',
        options: ['<link>', '<a>', '<href>', '<hyperlink>'],
        correctAnswer: '<a>'
      },
      {
        question: 'Какой атрибут используется для указания пути к изображению?',
        options: ['src', 'href', 'link', 'path'],
        correctAnswer: 'src'
      },
      {
        question: 'Какой тег используется для создания заголовка первого уровня в HTML?',
        options: ['<heading>', '<h1>', '<title>', '<header>'],
        correctAnswer: '<h1>'
      },
      {
        question: 'Какой CSS свойство используется для изменения цвета текста?',
        options: ['font-color', 'text-color', 'color', 'text-style'],
        correctAnswer: 'color'
      },
      {
        question: 'Какое значение используется для центрирования элемента по горизонтали с помощью свойства margin?',
        options: ['center', '0 auto', 'auto', '0 center'],
        correctAnswer: '0 auto'
      },
      {
        question: 'Какой тег используется для создания ненумерованного списка?',
        options: ['<ol>', '<ul>', '<li>', '<list>'],
        correctAnswer: '<ul>'
      },
      {
        question: 'Какой атрибут используется для объединения ячеек таблицы по горизонтали?',
        options: ['colspan', 'rowspan', 'merge', 'combine'],
        correctAnswer: 'colspan'
      },
      {
        question: 'Какое CSS свойство используется для изменения фона элемента?',
        options: ['bgcolor', 'background', 'color', 'background-color'],
        correctAnswer: 'background-color'
      },
      {
        question: 'Какой тег используется для вставки изображения в HTML?',
        options: ['<img>', '<image>', '<pic>', '<figure>'],
        correctAnswer: '<img>'
      },
      {
        question: 'Какое CSS свойство используется для добавления отступов внутри элемента?',
        options: ['margin', 'padding', 'spacing', 'border'],
        correctAnswer: 'padding'
      },
      // Дополнительные вопросы...
      {
        question: 'Какой тег используется для создания нумерованного списка?',
        options: ['<ol>', '<ul>', '<li>', '<list>'],
        correctAnswer: '<ol>'
      },
      {
        question: 'Какое CSS свойство используется для изменения шрифта текста?',
        options: ['font-family', 'text-font', 'font-style', 'font-weight'],
        correctAnswer: 'font-family'
      },
      {
        question: 'Какой атрибут используется для указания альтернативного текста для изображения?',
        options: ['alt', 'title', 'description', 'caption'],
        correctAnswer: 'alt'
      },
      {
        question: 'Какое значение используется для скрытия элемента в CSS?',
        options: ['hidden', 'display: none', 'invisible', 'hide'],
        correctAnswer: 'display: none'
      },
      {
        question: 'Какой тег используется для создания абзаца в HTML?',
        options: ['<p>', '<para>', '<paragraph>', '<text>'],
        correctAnswer: '<p>'
      },
      {
        question: 'Какое CSS свойство используется для установки высоты элемента?',
        options: ['height', 'size', 'width', 'length'],
        correctAnswer: 'height'
      },
      {
        question: 'Какой тег используется для создания строки таблицы в HTML?',
        options: ['<tr>', '<td>', '<th>', '<table-row>'],
        correctAnswer: '<tr>'
      },
      {
        question: 'Какое CSS свойство используется для создания тени текста?',
        options: ['text-shadow', 'text-outline', 'shadow', 'text-glow'],
        correctAnswer: 'text-shadow'
      },
      {
        question: 'Какой атрибут используется для указания идентификатора элемента?',
        options: ['class', 'id', 'name', 'identity'],
        correctAnswer: 'id'
      },
      {
        question: 'Какое значение используется для растяжения элемента на всю ширину родительского контейнера?',
        options: ['width: 100%', 'width: auto', 'width: full', 'width: inherit'],
        correctAnswer: 'width: 100%'
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
