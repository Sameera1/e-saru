<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>All products</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
<link href="styling.css" rel="stylesheet">
      <style>
          #container{
              margin-top: 100px;
          }
          
          tr{
             cursor: pointer;
          }
      </style>
  </head>
    
  <body>
      <nav role="navigation" class="navbar navbar-custom navbar-fixed-top"> 
      <div class="container-fluid">
         <div class="navbar-header">
                <a class="navbar-brand">E-Saru</a>
              <button type="button" class="navbar-toggle" data-target="#navbarCollapse" data-toggle="collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                 
              </button>
          </div>
          <div class="navbar-collapse collapse" id="navbarCollapse">
                     <ul class="nav navbar-nav">
                <li><a href="#">Home</a></li>
                <li><a href="#">All products</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">E-Consultation</a></li>
                <li class="active"><a href="#">My Profile</a></li>
              </ul>
                 <ul class="nav navbar-nav navbar-right">
                     <li><a href="#">Logged in as <b>username</b></a></li>
                    <li><a href="#">Log out</a></li>
                </ul>
          </div>
          </div>
      </nav>

      <div class="container" id="container">
          <div class="row">
              <div class="col-md-offset-3 col-md-6">
    <h2>General Account Settings:</h2>
          <div class="table-responsive">
            <table class="table table-hover table-condensed table-bordered">
              <tr data-target="#updateusername" data-toggle="modal">
                <td>Username</td>
                <td>Value</td>
              </tr>
             <tr data-target="#updateemail" data-toggle="modal">
                <td>Email</td>
                <td>Value</td>
              </tr>
             <tr data-target="#updatepassword" data-toggle="modal">
                <td>Password</td>
                <td>Hiddden</td>
              </tr>
            </table>
              </div>
          </div>
      </div>
     </div> 
         <form method="post" id="updateusernameform">
      <div class="modal" id="updateusername" role="dialog" aria-labelledby="myModelLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal">&times;</button>
                    <h4 id="myModalLabel">Edit Username: </h4>
          </div>
                    <div class="modal-body">
                        <div id="loginmessage">
                        
                        
                        </div>
                       
                         <div class="form-group">
                        <label for="loginemail">Username:</label>
                           <input class="form-control" type="text" name="username" id="username" maxlength="30" value="username value">
                        </div>            
          </div>
                    <div class="modal-footer">
                        <input class="btn green" name="updateusername" type="submit" value="Submit">
                        <button type="button"
 class="btn btn-default" data-dismiss="model">Cancel</button> 
                    
          </div>
          </div>
    </div>
     </div>
      </form>

      
       <form method="post" id="updateemailform">
      <div class="modal" id="updateemail" role="dialog" aria-labelledby="myModelLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal">&times;</button>
                    <h4 id="myModalLabel">Enter new email: </h4>
          </div>
                    <div class="modal-body">
                        <div id="loginmessage">
                        
                        
                        </div>
                       
                         <div class="form-group">
                        <label for="loginemail">Email:</label>
                           <input class="form-control" type="email" name="email" id="email" maxlength="50" value="useremail value">
                        </div>            
          </div>
                    <div class="modal-footer">
                        <input class="btn green" name="updateusername" type="submit" value="Submit">
                        <button type="button"
 class="btn btn-default" data-dismiss="model">Cancel</button> 
                    
          </div>
          </div>
    </div>
     </div>
      </form>

      
       <form method="post" id="updatepasswordform">
      <div class="modal" id="updatepassword" role="dialog" aria-labelledby="myModelLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal">&times;</button>
                    <h4 id="myModalLabel">Enter Current and New password: </h4>
          </div>
                    <div class="modal-body">
                        <div id="loginmessage">
                        
                        
                        </div>
                       
                         <div class="form-group">
                        <label for="currentpassword" class="sr-only">Your Current Password:</label>
                           <input class="form-control" type="password" name="currentpassword" id="currentpassword" maxlength="30" placeholder="Your current password">
                        </div> 
                        
                           <div class="form-group">
                        <label for="password" class="sr-only">Choose a Password:</label>
                           <input class="form-control" type="password" name="password" id="password" maxlength="30" placeholder="Choose a password">
                        </div> 
                        
                           <div class="form-group">
                        <label for="password2" class="sr-only">Cinfirm Password:</label>
                           <input class="form-control" type="password" name="password2" id="password2" maxlength="30" placeholder="Confirm password">
                        </div> 
          </div>
                    <div class="modal-footer">
                        <input class="btn green" name="updateusername" type="submit" value="Submit">
                        <button type="button"
 class="btn btn-default" data-dismiss="model">Cancel</button> 
                    
          </div>
          </div>
    </div>
     </div>
      </form>

      <div class="footer">
      <div class="container">
          <p>www.sab.ac.lk Copyright&copy; 2019-<?php $today=date("Y");echo $today;?></p>
          </div>
      </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/cdnAjax.js"></script>
<script src="js/cdn.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed
    <script src="js/bootstrap.min.js"></script> -->

  </body>
</html>