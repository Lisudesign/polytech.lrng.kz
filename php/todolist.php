<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Интерактивная доска с задачами</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: linear-gradient(90deg, #4a235a 50%, #fff 500%);
            font-family: Arial, sans-serif;
        }
        #taskBoard {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            width: 900px;
            height: 450px;
            padding: 20px;
            border: 2px solid #fff;
            border-radius: 20px;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }
        .taskSlot {
            width: 250px;
            height: 350px;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            border: 2px solid #ddd;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            overflow-y: auto;
        }
        .taskSlot h2 {
            margin-top: 0;
            margin-bottom: 10px;
            color: #4a235a;
            font-size: 18px;
            text-align: center;
        }
        .task {
            width: 100px;
            height: 100px;
            background-color: #3498db;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 10px;
            cursor: pointer;
            user-select: none;
            margin-bottom: 10px;
            position: relative;
        }
        .task.done {
            background-color: #27ae60;
        }
        .task.inProgress {
            background-color: #f39c12;
        }
        .task textarea {
            width: 100%;
            height: 100%;
            resize: none;
            border: none;
            background-color: transparent;
            font-family: Arial, sans-serif;
            font-size: 14px;
            color: #fff;
            padding: 10px;
            box-sizing: border-box;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 0;
        }
    </style>
</head>
<body>
    <div id="taskBoard">
        <div class="taskSlot" id="toDo" ondrop="drop(event)" ondragover="allowDrop(event)">
            <h2>Задачи</h2>
            <div id="task1" class="task" draggable="true" ondragstart="drag(event)" onclick="changeStatus('task1')">
                <textarea placeholder="Задача 1"></textarea>
            </div>
        </div>
        <div class="taskSlot" id="inProgress" ondrop="drop(event)" ondragover="allowDrop(event)">
            <h2>В процессе</h2>
            <div id="task2" class="task" draggable="true" ondragstart="drag(event)" onclick="changeStatus('task2')">
                <textarea placeholder="Задача 2"></textarea>
            </div>
        </div>
        <div class="taskSlot" id="done" ondrop="drop(event)" ondragover="allowDrop(event)">
            <h2>Готово</h2>
            <div id="task3" class="task" draggable="true" ondragstart="drag(event)" onclick="changeStatus('task3')">
                <textarea placeholder="Задача 3"></textarea>
            </div>
        </div>
    </div>

    <script>
        function drag(event) {
            event.dataTransfer.setData("text", event.target.id);
        }

        function drop(event) {
            event.preventDefault();
            var data = event.dataTransfer.getData("text");
            event.target.appendChild(document.getElementById(data));
        }

        function allowDrop(event) {
            event.preventDefault();
        }

        function changeStatus(taskId) {
            var taskElement = document.getElementById(taskId);
            if (taskElement.classList.contains("done")) {
                taskElement.classList.remove("done");
                taskElement.classList.add("inProgress");
            } else if (taskElement.classList.contains("inProgress")) {
                taskElement.classList.remove("inProgress");
            } else {
                taskElement.classList.add("done");
            }
        }
    </script>
</body>
</html>
