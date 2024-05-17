<?php
require("common.php");
if (isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<html>
    <head>
    
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
         
        <title>Sign Up</title>
    </head>
          <?php
          include 'header.php';
          ?>
     
         <body>
          <div class="container">
        <div class="row" >
            <div class="col-md-6 col-sm-6">
                <img src="nbproject/images/signup1.jpg" class="img-responsive center-block" style="margin-top: 175px">
            </div>
           
             <div class="col-md-6 col-sm-6">
                
                            <form action="signup_script.php" method="POST" style="margin-top: 150px; margin-bottom: 15px">
                                 <h3>SIGN UP</h3>
                             
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" name="name"  required = "true" 
                                       pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email" 
                                       pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="e-mail" required = "true">
                                 <?php echo $_GET['$m1']; ?>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" 
                                       pattern=".{6,}" name="password" required = "true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Contact" maxlength="10" size="10" name="contact" required = "true">
                               <?php echo $_GET['m2']; ?>
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="City" name="city" required = "true">
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="Address" name="address" required = "true">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
             
             
             
             </div>
        </div>
          </div>
    </body>
    <?php
          include 'footer.php';
    ?>
</html>