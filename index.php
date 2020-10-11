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
            <div id="chat-data">
                <span style="color: green;">Raziel:</span>
                <span style="color: brown;">How are you?</span>
                <span style="float: right;">12:30 PM</span>
            </div>
        </section>

        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter name">
            <textarea name="message" id="message"></textarea>
            <input type="submit" name="send" id="send" value="send">
        </form>

    </main>
    <script src="assets/js/main.js"></script>
</body>
</html>