 <!DOCTYPE html>
 <html>
    <head>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       <link href="style.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Store</title>
    </head>
    <body>
        <div class="navbar navbar-default navbar-fixed-top">
 <div class="container">
 <div class="navbar-header">
 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span> 
 </button>
 <a class="navbar-brand" href="index.php">E-Store</a>
 </div>
 <div class="collapse navbar-collapse" id="myNavbar">
 <ul class="nav navbar-nav navbar-right">
 
 <li><a href = "signup.php"><span class = "glyphicon glyphicon-user"></span> Sign Up </a></li>
 <li><a data-toggle="modal" href="#loginModal"><span class = "glyphicon glyphicon-log-in"></span> 
Login</a></li>

 <li><a href = "about.php"><span class = "glyphicon glyphicon-tasks "></span> About Us</a></li>
 <li><a href = "contact.php"><span class = "glyphicon glyphicon-phone"></span> Contact Us </a></li>
 </ul>
     
          </div>
        </div>
 </div>

        <div class="container">
                <div class="modal fade" tabindex="-1" id="loginModal" 
                      data-keyboard="false" role="dialog" data-backdrop="static">
                    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    &times;
                </button>
                <h4 class="modal-title">Login</h4>
            </div>
            <div class="modal-body">
                <form action="login_submit.php" method="POST" >
                    <p>Don't have an account? <a href="signup.php">Register</a></p>
                    <div class="form-group">
                        <label for="inputUserName">Username</label>
                        <input class="form-control" placeholder="Login Username" 
                                type="text" id="inputUserName" />
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">Password</label>
                        <input class="form-control" placeholder="Login Password" 
                                type="password" id="inputPassword" />
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                  
                    <br><br>
                    <p><a href="settings.php">Forgot Password?</a></p>
                </form>
            </div>
            
        </div>
    </div>
</div></div>
            
   
        
    </body>
 </html>