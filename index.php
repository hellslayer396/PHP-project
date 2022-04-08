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
            <?php while($todo = $todos->fetch(PDO::FETCH_ASSOC)){ ?>
                <div class="item">
                    <span id="<?php echo $todo['id']; ?>" class = "remove" >x</span>
                    <?php if($todo['checked']){ ?>
                        <input type="checkbox" class="check-box" checked/>
                        <h2 class="checked"><?php echo $todo['title'] ?></h2>
                    <?php }else{ ?>
                        <input type="checkbox" class="check-box"/>
                        <h2><?php echo $todo['title'] ?></h2>
                    <? } ?>
                    <br>
                    <small>created:  <?php $todo['date_time'] ?> </small>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>