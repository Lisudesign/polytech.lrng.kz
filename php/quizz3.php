<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Quiz</title>
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
    <h1>PHP Quiz</h1>
    <div id="questionContainer" class="question"></div>
    <div id="result" class="result"></div>
    <button onclick="checkAnswer()">Отправить ответ</button>
  </div>

  <script>
    const questions = [
      {
        question: 'Что выведет следующий код: echo 2 + 3 * 4;',
        options: ['20', '14', '18', '5'],
        correctAnswer: '14'
      },
      {
        question: 'Какой оператор используется для объединения строк в PHP?',
        options: ['+', '.', '&', '*'],
        correctAnswer: '.'
      },
      {
        question: 'Какой тип данных используется для хранения текста в PHP?',
        options: ['string', 'int', 'bool', 'array'],
        correctAnswer: 'string'
      },
      {
        question: 'Какой метод используется для вывода данных в PHP?',
        options: ['print()', 'echo()', 'write()', 'display()'],
        correctAnswer: 'echo()'
      },
      {
        question: 'Как создать переменную в PHP?',
        options: ['var $a;', '$a;', 'let $a;', 'int $a;'],
        correctAnswer: '$a;'
      },
      {
        question: 'Что будет результатом выполнения следующего кода: strlen("PHP")?',
        options: ['2', '3', '4', '5'],
        correctAnswer: '3'
      },
      {
        question: 'Какой символ используется для обозначения переменной в PHP?',
        options: ['$', '#', '@', '&'],
        correctAnswer: '$'
      },
      {
        question: 'Какой метод используется для удаления пробелов с начала и конца строки?',
        options: ['trim()', 'strip()', 'remove()', 'delete()'],
        correctAnswer: 'trim()'
      },
      {
        question: 'Какой оператор используется для сравнения значений в PHP?',
        options: ['==', '=', '===', '!='],
        correctAnswer: '=='
      },
      {
        question: 'Какой метод используется для сортировки массива в PHP?',
        options: ['sort()', 'order()', 'arrange()', 'organize()'],
        correctAnswer: 'sort()'
      },
      // Дополнительные вопросы...
      {
        question: 'Какой метод используется для добавления элемента в конец массива?',
        options: ['add()', 'append()', 'push()', 'array_push()'],
        correctAnswer: 'array_push()'
      },
      {
        question: 'Какой метод используется для преобразования строки в целое число в PHP?',
        options: ['int()', 'toInt()', 'intval()', 'convert()'],
        correctAnswer: 'intval()'
      },
      {
        question: 'Какой оператор используется для присваивания значения переменной?',
        options: ['=', '==', '===', ':'],
        correctAnswer: '='
      },
      {
        question: 'Как называется функция, которая вызывает саму себя?',
        options: ['self()', 'recursive()', 'call()', 'loop()'],
        correctAnswer: 'recursive()'
      },
      {
        question: 'Какой оператор используется для проверки вхождения элемента в массив?',
        options: ['in_array()', 'exists()', 'contains()', 'has()'],
        correctAnswer: 'in_array()'
      },
      {
        question: 'Что будет результатом выполнения следующего кода: strtoupper("php")?',
        options: ['php', 'PHP', 'Php', 'pHP'],
        correctAnswer: 'PHP'
      },
      {
        question: 'Какое ключевое слово используется для создания функции?',
        options: ['function', 'def', 'fun', 'method'],
        correctAnswer: 'function'
      },
      {
        question: 'Какой метод используется для удаления элемента из массива?',
        options: ['delete()', 'remove()', 'unset()', 'pop()'],
        correctAnswer: 'unset()'
      },
      {
        question: 'Какой метод используется для объединения двух массивов?',
        options: ['merge()', 'concat()', 'array_merge()', 'combine()'],
        correctAnswer: 'array_merge()'
      },
      {
        question: 'Что будет результатом выполнения следующего кода: var_dump(NULL);',
        options: ['string(0) ""', 'NULL', 'int(0)', 'NULL()'],
        correctAnswer: 'NULL'
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
