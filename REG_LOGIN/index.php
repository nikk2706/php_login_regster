<?php
    session_start();
    // echo $_SESSION['uname'];
    echo "Hello  ";
    if(isset($_SESSION['uname'])){

        echo $_SESSION['uname'];
    }
?>