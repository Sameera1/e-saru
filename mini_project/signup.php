<?php
session_start();
include("connection.php");


$missingUsername='<p><strong>Please enter a username</strong></p>';
$missingEmail='<p><strong>Please enter your email</strong></p>';
$invalidEmail='<p><strong>Please enter a valid email</strong></p>';
$missingPassword='<p><strong>Please enter a password</strong></p>';
$invalidPassword='<p><strong>Your password sould be at least 6 characters long and include one capital letter and one number!</strong></p>';
$differentPassword='<p>Passwords don\'t match!</p>';
$missingPassword2='<p><strong>Please confirm your password</strong></p>';

//get username
if (empty($POST["username"])){
    $errors .=$missingUsername;
}else{
    $username = filter_var($POST["username"],FILTER_SANITIZE_STRING);
}

//get email
if(empty($POST["email"])){
    $errors .=$missingEmail;
}else{
    $email = filter_var($POST["email"],FILTER_SANITIZE_EMAIL);
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errors .=$invalidEmail;
    }
}

//get password
if(empty($POST["password"])){
    $errors .=$missingPassword;
}elseif(!(strlen($POST["password"])>6 and preg_match('/[A-Z]/',$POST["password"]) and preg_match('/[0-9]/',$POST["password"]))){
    $errors .= $invalidPassword;
}else{
    $password = filter_var($POST["password"],FILTER_SANITIZE_STRING); 
    if(empty($POST["password2"])){
        $errors .=$missingPassword2;
    }else{
        $password2 = filter_var($POST["password2"],FILTER_SANITIZE_STRING);
        if($password !== $password2){
            $errors .= $differentPassword;
        }
    }
}
if($errors){
    $resultMessage = '<div class="alert alert-danger">' . $errors .'</div>';
    echo $resultMessage;
}
?>