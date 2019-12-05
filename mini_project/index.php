<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to E-Saru!</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link href="styling.css" rel="stylesheet">
  </head>

 <body id="index">
    <div class="container-fluid">
    
    <!--jumbotron box with name-->
    <div class="jumbotron" style="background-color:#234f1e">
    <div class="right" style="float:right">
    <h1 style="color:white">E-Saru Smart Store <br> &amp; E-Consultation System</h1>
    <h2 style="color:white">Sabaragamuwa University of Sri Lanka</h2>
    </div>
    
    <img src="images/Logo-SUSL.png">
   
    </div>
        
 
    <!--nav bar-->
    <nav role="navigation" class="navbar navbar-custom">
        
    <div class="navbar-header">
            <a class="navbar-brand">E-Saru</a>               
    </div>
        
          <div class="navbar-collapse collapse" id="navbarCollapse">
                <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">All products<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">vegetables</a></li>
                    <li><a href="#">fruits</a></li>
                    <li><a href="#">livestock</a></li>
                    <li><a href="#">others</a></li>
                </ul>    
                </li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">E-Consultation</a></li>
                <li><a href="#">Admin</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                <li><a href="#loginmodal" data-toggle="modal">Login</a></li>
                </ul>
          </div>
</nav>
        
 <div style="width: 65%; float: left;">
                <img class="firstPage" src="images/index.jpg" >
                 <img class="firstPage" src="images/index.jpg" >
                 <img class="firstPage" src="images/index.jpg" >
                 <img class="firstPage" src="images/index.jpg" >
                <img class="firstPage" src="images/index.jpg" >
                <img class="firstPage" src="images/index.jpg" >
                <img class="firstPage" src="images/index.jpg" >
                 <img class="firstPage" src="images/index.jpg" >
                <img class="firstPage" src="images/index.jpg" >
                 <img class="firstPage" src="images/index.jpg" >
                <img class="firstPage" src="images/index.jpg" >
                <img class="firstPage" src="images/index.jpg" >
                 <img class="firstPage" src="images/index.jpg" >
               <img class="firstPage" src="images/index.jpg" >
                <img class="firstPage" src="images/index.jpg" >
        </div>
        
        <br/><br/><br/>
            <div style="text-align: center">
             <h2 style="font-family: monospace">GET GREAT OFFERS</h2>
            <br/>
           <button type="button" class="btn btn-lg signup" data-target="#signupmodal" data-toggle="modal">Sign up for free</button>
            </div>
        <br/><br/><br/><br/><br/><br/><br/><br/>
        
  <!-- login form-->
    <form method="post" id="loginform">
    <div class="modal" id="loginmodal" role="dialog" aria-labelledby="myModelLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
        <button class="close" data-dismiss="modal">&times;</button>
        <h4 id="myModalLabel">Login: </h4>
        </div>
        <div class="modal-body">
                        
        <div id="loginmessage">
                        
                        
        </div>
                       
    <div class="form-group">
    <label for="loginemail" class="sr-only">Email:</label>
    <input class="form-control" type="email" name="loginemail" id="loginemail" placeholder="Email" maxlength="50">
    </div>
            
    <div class="form-group">
    <label for="loginpassword" class="sr-only">password:</label>
    <input class="form-control" type="password" name="loginpassword" id="loginpassword" placeholder="password" maxlength="30">
    </div>
                       
    <div class="checkbox">
    <label>
    <input type="checkbox" name="rememberme" id="rememberme">
    Remember Me </label>
    <a class="pull-right" style="cursor:pointer;" data-dismiss="modal" data-target="#forgotpasswordModal" data-toggle="modal">
    Forgot Password?
    </a>
    </div>    
          
    </div>
            
            
     <div class="modal-footer">
     <input class="btn btn-success" name="login" type="submit" value="Login">
     <button type="button"
 class="btn btn-danger" data-dismiss="model">Cancel</button> 
     <button type="button"
 class="btn btn-info pull-left" data-dismiss="model" data-target="#signupmodal" data-toggle="modal">Register</button>
    </div>
    </div>
    </div>
</div>
</form>
        
 <!-- signup form-->
<form method="post" id="signupform">
<div class="modal" id="signupmodal" role="dialog" aria-labelledby="myModelLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button class="close" data-dismiss="modal">&times;</button>
<h4 id="myModalLabel">Sign Up Today &amp; Start Shopping! </h4>
</div>
<div class="modal-body">
    
<div id="signupmessage">
                        
                        
</div>
                       
<div class="form-group">
<label for="username" class="sr-only">Username:</label>
<input class="form-control" type="text" name="username" id="username" placeholder="Username" maxlength="30">
</div>
    
<div class="form-group">
<label for="email" class="sr-only">Email:</label>
<input class="form-control" type="email" name="email" id="email" placeholder="Email Address" maxlength="50">
</div>
                        
<div class="form-group">
<label for="password" class="sr-only">Choose a password:</label>
<input class="form-control" type="password" name="password" id="password" placeholder="Choose a password" maxlength="30">
</div>
    
<div class="form-group">
<label for="password2" class="sr-only">Confirm Password:</label>
<input class="form-control" type="password" name="password2" id="password" placeholder="Confirm password" maxlength="30">
</div>
</div>
    
<div class="modal-footer">
<input class="btn btn-info" name="signup" type="submit" value="Sign Up">
<button type="button"
 class="btn btn-danger" data-dismiss="model">Cancel</button></div>
 </div>
</div>
</div>
</form>
        
<!-- forgot password form-->
<form method="post" id="forgotpasswordform">
<div class="modal" id="forgotpasswordModal" role="dialog" aria-labelledby="myModelLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button class="close" data-dismiss="modal">&times;</button>
<h4 id="myModalLabel">Forgot Password? Enter your email address:</h4>
</div>
<div class="modal-body">
    
<div id="forgotpasswordmessage">
                        
                        
</div>
                       
<div class="form-group">
<label for="forgotemail" class="sr-only">Email:</label>
<input class="form-control" type="email" name="forgotemail" id="forgotemail" placeholder="Email" maxlength="50">
</div>  
</div>

<div class="modal-footer">
<input class="btn btn-info" name="forgotpassword" type="submit" value="Submit">
<button type="button"
 class="btn btn-danger" data-dismiss="model">Cancel</button> 
<button type="button"
 class="btn btn-success pull-left" data-dismiss="model" data-target="signupmodal" data-toggle="modal">Register</button>
</div>
</div>
</div>
</div>
</form>
        
        
     <!--footer-->
           <div class="footer">
     
          <p style="color:white">www.sab.ac.lk Copyright&copy; 2019-<?php $today=date("Y");echo $today;?></p>
         
      </div>

    </div>
 </body>
</html>