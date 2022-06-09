<?php
session_start();

if(isset($_SESSION['usr_id'])!="") {
    header("Location: index.php");
}

include_once 'dbconnect.php';

//check if form is submitted
if (isset($_POST['logi
    '])) {

    $email = mysqli_real_escape_string($con, $_POST['demail']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $result = mysqli_query($con, "SELECT * FROM admin WHERE email = '" . $email. "' and password = '" . md5($password) . "'");

    if ($row = mysqli_fetch_array($result)) {
        $_SESSION['user'] = $row['id'];
        header("Location: view_question.php");
    } else {
        $msg = "Incorrect Email or Password!!!";
        include "index.php";
    }
}
?>
