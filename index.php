<?php require_once 'model/db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP AJAX CHAT SYSTEM</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <script src="assets/js/main.js"></script>
</head>
<body onload="getChat();">
    <main id="container">

        <section id="chat-box">
            <div id="chat">
                loading...
            </div>
        </section>

        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter name">
            <textarea name="message" id="message"></textarea>
            <input type="submit" name="send" id="send" value="send"">
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
                   <embed loop ='false' src='assets/sounds/chat.mp3' hidden='true' autoplay='true'/>
                   ";
                }
            }
        ?>
        <script>
                setInterval(() => {getChat()}, 1000);
        </script>
    </main>
</body>
</html>