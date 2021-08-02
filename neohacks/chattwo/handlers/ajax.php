<?php
session_start(); 
include("../config.php"); //database credentials
include("db.php");
if( isset($_REQUEST['action']) ){
    switch($_REQUEST['action']){
        case"SendMessage":
            $query = $db->prepare("INSERT INTO chat SET user=?, message=?, date=?, id=?");
            $query->execute([$_SESSION['username'], $_REQUEST['message'], $_REQUEST['date'], $_REQUEST['id']]);
        break;

        case "getChat":
            // $recent = mysqli_insert_id();
            $isadmin = array('Splitxorpio', "h");
            $query = $db->prepare("SELECT * from chat");
            $query->execute();
            $chat = '';
            $rs = $query->fetchAll(PDO::FETCH_OBJ);
            foreach( $rs as $r ){
                if ($r->user == $_SESSION['username']){
                    $r->user = "You";
                }
                    $chat .= $r->date . ': '.'<div id="'.$r->id.'"class="message">'. $r->user.' said: ' . $r->message . '<hr style="width: 300px;"/>'.'</div>';
            }
            echo $chat;
        break;
    }
}


?>