<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .registration-form {
            width: 400px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f2f2f2;
        }

        form {
            margin-bottom: 10px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
        }

        input[type="submit"] {
            padding: 8px 16px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <?php
        // Подключение к базе данных
        $conn = mysqli_connect("localhost", "root", "", "easymarketdb");

        // Обработка ошибок подключения
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Обработка данных при отправке формы
        if (isset($_POST['submit'])) {
            $first_name = $_POST['first_name'];
            $second_name = $_POST['second_name'];
            $login = $_POST['login'];
            $password = $_POST['password'];

            // Защита от SQL-инъекций
            $first_name = mysqli_real_escape_string($conn, $first_name);
            $second_name = mysqli_real_escape_string($conn, $second_name);
            $login = mysqli_real_escape_string($conn, $login);
            $password = mysqli_real_escape_string($conn, $password);

            // Хэширование пароля
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Вставка данных в таблицу users
            $sql = "INSERT INTO users (First_name, Second_name, login, password) VALUES ('$first_name', '$second_name', '$login', '$hashed_password')";
            mysqli_query($conn, $sql);

            echo "Registration successful.";
            echo "<br><br>";
            echo "<a href='index.php'>Back to Home</a>"; // Добавленная кнопка
        }

        // Закрытие соединения с базой данных
        mysqli_close($conn);
    ?>

    <div class="container">
        <div class="registration-form">
            <h2>Registration</h2>
            <form method="POST" action="">
                <label>First Name:</label>
                <input type="text" name="first_name" required><br>
                <label>Second Name:</label>
                <input type="text" name="second_name" required><br>
                <label>Login:</label>
                <input type="text" name="login" required><br>
                <label>Password:</label>
                <input type="password" name="password" required><br>
                <input type="submit" name="submit" value="Register">
            </form>
        </div>
    </div>
</body>
</html>
