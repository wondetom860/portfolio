<?php


if($_POST['submit']){
    echo'<br>Form Submitted using POST global variable<br>';
    var_dump($_POST);
}

if($_GET['submit']){
    echo'<br>Form Submitted using GET global variable<br>';
    var_dump($_POST);
}


?>