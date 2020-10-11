<?php require_once 'model/db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP AJAX CHAT SYSTEM</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <script src="assets/js/main.js"></script>
    <script>
        function ajax() {
            var request = new XMLHttpRequest();
            request.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("chat").innerHTML = this.responseText;
                    alert("oi");
                }
                request.open("GET", "chat.php", true);
                request.send();
            }
        }
    </script>
</head>
<body onload="ajax();">
    <main id="container">

        <section id="chat-box">
            <div id="chat">
                loading...
            </div>
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
                   <embed loop ='false' src='assets/sounds/chat.mp3' hidden='true' autoplay='true'/>
                   ";
                }
            }
        ?>
        
    </main>
</body>
</html>