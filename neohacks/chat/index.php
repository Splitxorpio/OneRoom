<?php
session_start();
include "config.php";
// $last_insert_id = lastInsertId();
// print(lastInsertId());
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" type="text/css">
    <script src="https://kit.fontawesome.com/df4aa193a7.js"></script>
    <link rel="icon" href="../logo.png">
    <style>
        button:hover {
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="info">
            <h1>Topic: Chill</h1>
            <br>
            <div class="container">
                <img style="margin-right: 15px; background-color: white; width: 55px; height: 55px; border-radius: 100px; border: 2px solid #E66677; padding: 5px;" src="https://avatars.dicebear.com/api/bottts/<?php echo $_SESSION['username'] ?>.svg" alt="" />
                <h1 style="font-size: 55px;">
                    <?php
                    echo (" " . $_SESSION['username'])
                    ?>
                </h1>
            </div>
            <br>
            <a href="../chattwo/index.php" style="border-radius: 5px; padding: 5px; background-color: white; border: 1px solid gray; width: auto; text-decoration:none; color: black;">Computer Science Chat</a>
            <br>
            <a href="#" style="border-radius: 5px; padding: 5px; background-color: white; border: 1px solid gray; width: auto; text-decoration:none; color: black;">Math/Science Chat</a>
            <br>
            <h2>Not you?</h2>
            <form method="POST" action="../index.php">
                <input style="border-radius: 5px; padding: 5px; background-color: white; border: 1px solid gray; width: 30%" id="logout" type="submit" name="logout" value="Sign Out!">
            </form>
        </div>
    </div>
    <div class="centralized">
        <div id="scroll" class="chathistory">
        </div>
        <p><button style="padding: 5px; background-color: orangered; color: white; border: 2px solid orangered; border-radius: 25px;" onclick="scrollToBottom()">Jump to most recent message ⬇</button></p>
        <div class="chatbox">
            <form action="" method="POST">
                <textarea class="txtarea" id="message" name="message" placeholder="<?php echo ("Hello " . $_SESSION['username'] . ", type your message here.") ?>"></textarea>
            </form>
        </div>
    </div>
    <script>
        const username = <?php $_SESSION['username']; ?>
        $(document).ready(function() {
            loadChat();
        });
        $('#message').keyup(function(e) {
            var message = $(this).val();
            if (e.which == 13) {
                $.post('handlers/ajax.php?action=SendMessage&message=' + message + '&username=' + username, function(response) {
                    loadChat();
                    $('#message').val('');
                });
            }
        });

        function loadChat() {
            $.post('handlers/ajax.php?action=getChat', function(response) {
                $('.chathistory').html(response);
            });
        }
        setInterval(function() {
            loadChat();
        }, 2000);

        function scrollToBottom() {
            var objDiv = document.getElementById("scroll");
            objDiv.scrollTop = objDiv.scrollHeight;
        }
    </script>
</body>

</html>