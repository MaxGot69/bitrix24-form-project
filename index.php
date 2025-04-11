<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма отправки данных</title>
    <style>
        /* Добавляем стили прямо в файл */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .form-container {
            display: flex;
            flex-direction: column;
        }

        .input-field {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .input-field:focus {
            border-color: #4CAF50;
            outline: none;
        }

        .submit-btn {
            background-color: #4CAF50;
            color: white;
            padding: 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .submit-btn:hover {
            background-color: #45a049;
        }

        .submit-btn:active {
            background-color: #388e3c;
        }

        textarea {
            resize: vertical;
            height: 120px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Форма отправки данных в Bitrix24</h1>
        <form action="send.php" method="POST" class="form-container">
            <label for="name">Имя:</label>
            <input type="text" id="name" name="name" required class="input-field"><br><br>
            
            <label for="phone">Телефон:</label>
            <input type="text" id="phone" name="phone" required class="input-field"><br><br>
            
            <label for="comment">Комментарий:</label>
            <textarea id="comment" name="comment" required class="input-field"></textarea><br><br>

            <input type="submit" value="Отправить" class="submit-btn">
        </form>
    </div>
</body>
</html>
