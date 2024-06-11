<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MySQL Quiz</title>
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
    <h1>MySQL Quiz</h1>
    <div id="questionContainer" class="question"></div>
    <div id="result" class="result"></div>
    <button onclick="checkAnswer()">Отправить ответ</button>
  </div>

  <script>
    const questions = [
      {
        question: 'Какой оператор используется для выбора всех записей из таблицы в MySQL?',
        options: ['SELECT *', 'SELECT ALL', 'GET *', 'FETCH *'],
        correctAnswer: 'SELECT *'
      },
      {
        question: 'Какой тип данных используется для хранения числовых значений с плавающей точкой в MySQL?',
        options: ['INT', 'FLOAT', 'CHAR', 'BOOLEAN'],
        correctAnswer: 'FLOAT'
      },
      {
        question: 'Какой оператор используется для обновления данных в таблице в MySQL?',
        options: ['MODIFY', 'UPDATE', 'CHANGE', 'SET'],
        correctAnswer: 'UPDATE'
      },
      {
        question: 'Какой ключевое слово используется для сортировки результатов запроса в MySQL?',
        options: ['SORT BY', 'ORDER', 'ORDER BY', 'SORT'],
        correctAnswer: 'ORDER BY'
      },
      {
        question: 'Какой тип JOIN возвращает только совпадающие записи из обеих таблиц?',
        options: ['INNER JOIN', 'LEFT JOIN', 'RIGHT JOIN', 'FULL JOIN'],
        correctAnswer: 'INNER JOIN'
      },
      {
        question: 'Какой оператор используется для удаления записей из таблицы в MySQL?',
        options: ['REMOVE', 'DELETE', 'DROP', 'CLEAR'],
        correctAnswer: 'DELETE'
      },
      {
        question: 'Какой оператор используется для добавления новых записей в таблицу в MySQL?',
        options: ['ADD', 'INSERT', 'UPDATE', 'APPEND'],
        correctAnswer: 'INSERT'
      },
      {
        question: 'Какое ключевое слово используется для объединения результатов двух запросов в MySQL?',
        options: ['UNION', 'JOIN', 'MERGE', 'CONNECT'],
        correctAnswer: 'UNION'
      },
      {
        question: 'Какое значение используется для представления отсутствующих данных в MySQL?',
        options: ['NULL', 'EMPTY', 'NONE', 'NIL'],
        correctAnswer: 'NULL'
      },
      {
        question: 'Какой оператор используется для создания новой таблицы в MySQL?',
        options: ['CREATE TABLE', 'NEW TABLE', 'MAKE TABLE', 'ADD TABLE'],
        correctAnswer: 'CREATE TABLE'
      },
      // Дополнительные вопросы...
      {
        question: 'Какой оператор используется для удаления таблицы в MySQL?',
        options: ['REMOVE TABLE', 'DELETE TABLE', 'DROP TABLE', 'CLEAR TABLE'],
        correctAnswer: 'DROP TABLE'
      },
      {
        question: 'Какое ключевое слово используется для добавления условий в запрос MySQL?',
        options: ['IF', 'WHERE', 'HAVING', 'CONDITION'],
        correctAnswer: 'WHERE'
      },
      {
        question: 'Какое ключевое слово используется для группировки результатов запроса в MySQL?',
        options: ['GROUP BY', 'ORDER BY', 'SORT BY', 'COLLECT BY'],
        correctAnswer: 'GROUP BY'
      },
      {
        question: 'Какой тип данных используется для хранения больших текстовых блоков в MySQL?',
        options: ['VARCHAR', 'TEXT', 'CHAR', 'STRING'],
        correctAnswer: 'TEXT'
      },
      {
        question: 'Какой оператор используется для изменения структуры существующей таблицы в MySQL?',
        options: ['MODIFY TABLE', 'CHANGE TABLE', 'UPDATE TABLE', 'ALTER TABLE'],
        correctAnswer: 'ALTER TABLE'
      },
      {
        question: 'Какой оператор используется для установки первичного ключа в MySQL?',
        options: ['PRIMARY KEY', 'SET KEY', 'DEFINE KEY', 'MAKE KEY'],
        correctAnswer: 'PRIMARY KEY'
      },
      {
        question: 'Какое ключевое слово используется для удаления дубликатов в результате запроса MySQL?',
        options: ['UNIQUE', 'DISTINCT', 'FILTER', 'REMOVE DUPLICATES'],
        correctAnswer: 'DISTINCT'
      },
      {
        question: 'Какой оператор используется для добавления столбца в существующую таблицу в MySQL?',
        options: ['ADD COLUMN', 'NEW COLUMN', 'INSERT COLUMN', 'UPDATE COLUMN'],
        correctAnswer: 'ADD COLUMN'
      },
      {
        question: 'Какое значение используется для автоприбавления значения в столбце в MySQL?',
        options: ['AUTOINCREMENT', 'AUTO_INCREMENT', 'AUTO', 'INCREMENT'],
        correctAnswer: 'AUTO_INCREMENT'
      },
      {
        question: 'Какое ключевое слово используется для ограничения диапазона значений в запросе MySQL?',
        options: ['LIMIT', 'RANGE', 'BETWEEN', 'RESTRICT'],
        correctAnswer: 'LIMIT'
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
