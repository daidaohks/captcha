<?php
session_start();
 
if($_POST['code'] == $_SESSION['code']){
    echo 'ok'.$_POST['code']."==".$_SESSION['code'];
}else{
    echo 'no'.$_POST['code']."==".$_SESSION['code'];
}
?>