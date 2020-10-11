<?php require_once 'model/db.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP AJAX CHAT SYSTEM</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <main id="container">

        <section id="chat-box">
            <?php 
                $query = "SELECT * FROM CHAT ORDER BY ID DESC";
                $chatSelect = $chatDB->query($query)->fetchAll();
                foreach ($chatSelect as $data) {
            ?>
            <div id="chat-data">
                <span style="color: green;"><?=$data['NAME']?>:</span>
                <span style="color: brown;"><?=$data['MESSAGE']?></span>
                <span style="float: right;"><?=$data['DATE']?></span>
            </div>
            <?php } ?>
        </section>

        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter name">
            <textarea name="message" id="message"></textarea>
            <input type="submit" name="send" id="send" value="send">
        </form>
        
        <?php
            if (isset($_POST['send'])) {

                $name = $_POST['name'];
                $message = $_POST['message'];

                $chatInsert = "INSERT INTO CHAT(ID, NAME, MESSAGE) 
                VALUES('DEFAULT', '$name', '$message');
                ";

                $insertMessage = $chatDB->query($chatInsert);

                if ($insertMessage) {
                   echo "
                   <embed loop ='false' src='assets/sounds/chat.wav' hidden='true' autoplay='true'/>
                   ";
                }

            }
        ?>

    </main>
    <script src="assets/js/main.js"></script>
</body>
</html>