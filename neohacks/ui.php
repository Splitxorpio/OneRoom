<?php
session_start();
include 'db.php';
$username = $_POST['username'];
$password = $_POST['password'];
$_SESSION['valid'] = true;
$_SESSION['timeout'] = time();
$_SESSION['username'] = $username;
$_SESSION['password'] = $password;

$username = stripcslashes($username);
$password = stripcslashes($password);
$email = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);
$result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' and password = '$password'");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/ui.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="css/main.css">
</head>

<body style="overflow: hidden;">
    <nav class="navbar">
        <div class="max-width">
            <ul class="menu">
                <li><p style="color: white;">Chatrooms:</p></li>
                <li><a href="chat/index.php" class="menu-btn">Chill</a></li>
                <li><a href="chattwo/index.php" class="menu-btn">Computer Science</a></li>
                <li><a href="#contact" class="menu-btn">Math/Science</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>
    <div class="container3">
        <form method="POST" action="index.php" class="holder">
            <img style="width: 55px; height: 55px; border-radius: 100px; border: 2px solid #E66677; padding: 5px;" src="https://avatars.dicebear.com/api/bottts/<?php echo $_SESSION['username'] ?>.svg" alt="" />
            <p>
                <?php
                echo ("Hello " . $username . "!");
                ?>
            </p>
            <br>
            <p>Welcome to OneRoom Beta! We are so happy to have you!</p>
            <br>
            <input style="border-radius: 5px; padding: 5px; background-color: white; border: 1px solid gray;" type="submit" name="logout" value="Sign Out!">
        </form>
    </div>
    <script>
        // function functio() {
        //     swal({
        //         title: "<?php echo 'Welcome, ' . $username ?> To OneRoom! 🤗",
        //         text: "We hope you have a great time here! ",
        //         icon: "success",
        //     });
        // }
        window.onload = functio();
    </script>
</body>

</html>