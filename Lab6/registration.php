<?php
session_start();

if(! empty($_POST)){
    if(isset($_POST['question'])){
        $_SESSION['question'] = $_POST['question'];
        $_SESSION['yes']  = 0;
        $_SESSION['no']  = 0;
        

    }

}


?>