<html>
    <head>
        <meta charset="UTF-8">
        <title>Users</title>
    
    
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Index</title>
        </head>
        <body style="padding-top: 50px;">
        <?php
        include 'header.php';
        ?>
            <div class="container" >
        <div class="row">
            <div class="col-md-9 col-sm-6">
                <h3>LIVE SUPPORT</h3>
               <p>24 hours | 7 days a week | 365 days a year live Technical support</p>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem<br>lpsum is that it has a more-or-less normal distribution of letters. There are many variation of passages of Lorem lpsum available, but the majority<br>have suffered alteration in some form,by injected humour, or randomised words which don't look even slightly believable. if you are going to use a<br>passage of Lorem lpsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                </div> 
               <div class="col-md-3 col-sm-6">
                <img src="nbproject/images/contact.png" class="img-responsive center-block">
            </div>
        </div>
                <div class="row">
                    <div class="col-md-7 col-sm-6">
                        <h3>CONTACT US</h3>
                         <form>
                    <br>   
                            <div class="form-group">
                              Name:<input class="form-control" name="name"  required = "true">
                            </div>
               
                            <div class="form-group">
                                Email:<input type="email" class="form-control" name="email_id" required = "true">
                            </div>
                           
                            <div class="form-group">
                                Message:<input type="text" class="form-control" name="message" required = "true">
                            </div>
                             
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                </div>
                    <div class="col-md-5 col-sm-6">
                        <H3>Company Information:</H3>
                        <p>500 Lorem lpsum Dolor sit</p>
                        <p>22-56-2-9 sit Amet,Lorem</p>
                        <p>USA</p>
                        <p>Phone:(00)222 666 444</p>
                        <p>Fax:(000)000 00 00 0</p>
                        <p>Email:info@mycompany.com</p>
                        <p>Follow on:Facebook,Twitter</p>   
                    </div>
                    
            </div>
    <?php
   include 'footer.php';
       ?>
        </body>
        </html>