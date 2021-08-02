<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <div class="container">
        <div class="holder">
            <form action="registered.php" method="POST">
                <h1 style="color: black">Yes!! Join the OneRoom <strike>Cult</strike> Squad!</h1>
                <br>
                <h1 href="#home" style="color: #ff6681">Sign<span style="color:#3a3294">up</span></h1>
                <br>
                <hr style="width: 80%;">
                <br>
                <input type="text" id="username" name="username" placeholder="Username">
                <br>
                <input type="password" id="password" name="password" placeholder="Password">
                <br>
                <input name="register" type="submit" value="Signup" class="signup">
                <br>
            </form>
            <form action="login.php" method="POST" class="">
                <p>or</p>
                <button style="text-decoration: none; text-align: center;" href="login.php" class="signup" type="">Login!</button>
            </form>
        </div>
    </div>
</body>

</html>