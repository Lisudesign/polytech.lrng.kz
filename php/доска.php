<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Интерактивная доска для рисования и заметок</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #4a235a; /* Фон фиолетового цвета */
        }
        #drawingCanvas {
            border: 2px solid #000; /* Черная граница */
            background-color: #fff; /* Белый фон доски */
            cursor: crosshair;
        }
        #clearButton {
            position: absolute;
            top: 20px;
            right: 20px;
            padding: 10px 20px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        #clearButton:hover {
            background-color: #2980b9;
        }
        .note {
            position: absolute;
            width: 150px;
            height: 100px;
            background-color: #ffeb3b;
            border: 1px solid #333;
            padding: 10px;
            box-sizing: border-box;
            cursor: move;
            font-family: Arial, sans-serif;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <canvas id="drawingCanvas" width="800" height="600"></canvas>
    <button id="clearButton">Очистить</button>
    
    <div id="note1" class="note" draggable="true" ondragstart="dragStart(event)" contenteditable="true">Заметка 1</div>
    <div id="note2" class="note" draggable="true" ondragstart="dragStart(event)" contenteditable="true">Заметка 2</div>
    <div id="note3" class="note" draggable="true" ondragstart="dragStart(event)" contenteditable="true">Заметка 3</div>

    <script>
        var canvas = document.getElementById('drawingCanvas');
        var context = canvas.getContext('2d');
        var isDrawing = false;
        var lastX = 0;
        var lastY = 0;

        function startDrawing(e) {
            isDrawing = true;
            [lastX, lastY] = [e.offsetX, e.offsetY];
        }

        function draw(e) {
            if (!isDrawing) return;
            context.beginPath();
            context.moveTo(lastX, lastY);
            context.lineTo(e.offsetX, e.offsetY);
            context.strokeStyle = '#000'; // Цвет линии черный
            context.lineWidth = 3; // Ширина линии
            context.lineCap = 'round'; // Закругленные концы линии
            context.stroke();
            [lastX, lastY] = [e.offsetX, e.offsetY];
        }

        function stopDrawing() {
            isDrawing = false;
        }

        function clearCanvas() {
            context.clearRect(0, 0, canvas.width, canvas.height);
        }

        canvas.addEventListener('mousedown', startDrawing);
        canvas.addEventListener('mousemove', draw);
        canvas.addEventListener('mouseup', stopDrawing);
        canvas.addEventListener('mouseout', stopDrawing);

        document.getElementById('clearButton').addEventListener('click', clearCanvas);

        // Drag and drop functionality for notes
        function dragStart(event) {
            event.dataTransfer.setData("text/plain", event.target.id);
        }

        document.addEventListener("dragover", function(event) {
            event.preventDefault();
        });

        document.addEventListener("drop", function(event) {
            event.preventDefault();
            var id = event.dataTransfer.getData("text");
            var note = document.getElementById(id);
            note.style.left = event.clientX - note.offsetWidth / 2 + "px";
            note.style.top = event.clientY - note.offsetHeight / 2 + "px";
        });
    </script>
</body>
</html>
