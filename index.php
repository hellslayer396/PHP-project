<?php
require 'db_conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>To-do list</title>
</head>
<body>
    <div class="main">
        <div class="add">
            <form action="">
                <input type="text" name="title" placeholder="Enter the task">
                <button type="submit">Add</button>
            </form>
        </div>
        <?php
            $todos = $conn->query("SELECT * FROM todos ORDER BY id DESC");
        ?>
        <div class="tasks">
            <?php if($todos->rowCount()===0){?>
                <div class="item">
                <input type="checkbox">
                <h2>This is trial task</h2>
                <br>
                <small>created: 08/04/2022 </small>
                </div>
            <?php } ?>
            <div class="item">
                <input type="checkbox">
                <h2>This is trial task</h2>
                <br>
                <small>created: 08/04/2022 </small>
            </div>
        </div>
    </div>
</body>
</html>