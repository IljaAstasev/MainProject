<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
        }

        .products {
            width: 70%;
            margin-right: 20px;
        }

        .add-form {
            width: 30%;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        .delete-form {
            text-align: center;
            margin-bottom: 20px;
        }

        .edit-form {
            text-align: right;
        }

        form {
            margin-bottom: 10px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        textarea {
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

        // Обработка запросов
        if (isset($_POST['add'])) {
            // Добавление товара
            $name = $_POST['name'];
            $price = $_POST['price'];
            $photo = $_POST['photo'];
            $description = $_POST['description'];

            $sql = "INSERT INTO goods (name, price, photo, description) VALUES ('$name', '$price', '$photo', '$description')";
            mysqli_query($conn, $sql);
        } elseif (isset($_POST['delete'])) {
            // Удаление товара
            $id = $_POST['id'];

            $sql = "DELETE FROM goods WHERE id='$id'";
            mysqli_query($conn, $sql);
        } elseif (isset($_POST['update'])) {
            // Обновление информации о товаре
            $id = $_POST['id'];
            $name = $_POST['name'];
            $price = $_POST['price'];
            $photo = $_POST['photo'];
            $description = $_POST['description'];

            $sql = "UPDATE goods SET name='$name', price='$price', photo='$photo', description='$description' WHERE id='$id'";
            mysqli_query($conn, $sql);
        }

        // Запрос на выборку всех товаров
        $sql = "SELECT * FROM goods";
        $result = mysqli_query($conn, $sql);

        // Отображение таблицы с товарами
        if (mysqli_num_rows($result) > 0) {
            echo "<table>";
            echo "<tr><th>ID</th><th>Name</th><th>Price</th><th>Photo</th><th>Description</th></tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['price']."</td>";
                echo "<td>".$row['photo']."</td>";
                echo "<td>".$row['description']."</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "No goods found.";
        }

        // Закрытие соединения с базой данных
        mysqli_close($conn);
    ?>

    <h2>Add Goods</h2>
    <form method="POST" action="">
        <label>Name:</label>
        <input type="text" name="name" required><br>
        <label>Price:</label>
        <input type="text" name="price" required><br>
        <label>Photo:</label>
        <input type="text" name="photo" required><br>
        <label>Description:</label><br>
        <textarea name="description" required></textarea><br>
        <input type="submit" name="add" value="Add">
    </form>

    <h2>Delete Goods</h2>
    <form method="POST" action="">
        <label>Enter ID:</label>
        <input type="text" name="id" required><br>
        <input type="submit" name="delete" value="Delete">
    </form>

    <h2>Update Goods</h2>
    <form method="POST" action="">
        <label>Enter ID:</label>
        <input type="text" name="id" required><br>
        <label>Name:</label>
        <input type="text" name="name" required><br>
        <label>Price:</label>
        <input type="text" name="price" required><br>
        <label>Photo:</label>
        <input type="text" name="photo" required><br>
        <label>Description:</label><br>
        <textarea name="description" required></textarea><br>
        <input type="submit" name="update" value="Update">
    </form>
</body>
</html>
