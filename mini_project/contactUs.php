<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contact Form</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <style>
            h1{
                color: purple;
            }
            .contactForm{
               border: 1px solid #7c73f6; 
                margin-top: 50px;
                border-radius: 15px;
            }
        </style>
    </head>
    <body>
<div class="container-fluid">
       <div class="row">
            <div class="col-sm-offset-1 col-sm-10 contactForm">
                <h1>Contact Us:</h1>
<?php 
//get user input
$name=$_POST["name"];
$email=$_POST["email"];
$message=$_POST["message"];
//error messages
$missingName='<p><strong>Please enter your name!</strong></p>';
$missingEmail='<p><strong>Please enter your email!</strong></p>';
$InvalidEmail='<p><strong>Please enter a valid email!</strong></p>';
$missingMessage='<p><strong>Please enter your message!</strong></p>';
 //check for user submission
if($_POST["submit"]){
             //check errors   
    if(!$name){
        $errors=$missingName;
                }
    else{
        $name=filter_var($name,FILTER_SANITIZE_STRING);
    }
    if(!$email){
        $errors=$missingEmail;
                }
    else{
        $email=filter_var($email,FILTER_SANITIZE_EMAIL);
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $errors=$InvalidEmail;
        }
    }
    if(!$message){
        $errors=$missingMessage;
                }
    else{
        $message=filter_var($message,FILTER_SANITIZE_STRING);
    }
}
    //if errors
    if($errors){
        $resultMessage='<div class="alert alert-danger">' . $errors . '</div>';
    }else{
        $to="gayadisameera96@gmail.com";
        $subject="consultant";
        $message="
        <p>Name: $name</p>
        <p>Email: $email</p>
        <p>Message:</p>
        <p><strong>$message</strong></p>";
        $headers="contebt-type:text/html";
        if(mail($to, $subject, $message, $headers)){
            $resultMessage= '<div class="alert alert-success">Thanks for your message. We will get back to you as soon as possible!</div>';
        }
        else{
            $resultMessage='<div class="alert alert-success">Unable to send email. Please try again later!</div>';
        }
    }
    echo $resultMessage;
    
                
                    //print error msg
                //else
                    //send mail
                //if success
                    //print success
                //else
                    //print fail
            //print result message

              
?>
                
                <form action="contactUs.php" method="post">
                    <div class="form-group">
                    <label for="name">Name:</label>
                        <input type="text" name="name" id="name" placeholder="Name" class="form-control">
                    </div>
                    <div class="form-group">
                    <label for="email">Email:</label>
                        <input type="email" name="email" id="email" placeholder="Email" class="form-control">
                    </div>
                    <div class="form-group">
                    <label for="Message">Message:</label>
                        <textarea name="message" id="message" rows="5" class="form-control"></textarea>
                    </div>
                    <input type="submit" name="submit" class="btn btn-success btn-lg" value="Send Message"> 
                </form>
            </div>
        </div> 
 </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/bootstrap.min.js">
        </script>
    </body>
</html>
