<?php
    $dbhost = "localhost";
    $dbname = "chat_system";
    $dbuser = "root";
    $dbpass= '';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    try{
        $db = new PDO("mysql:dbhost=$dbhost;dbname=$dbname", "$dbuser", "$dbpass");
    }catch(PDOException $e)
    {
        echo $e->getMessage();
    }
?>