<?php
 session_start();
require ('logincheck.php');
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Login || Educat</title>
        <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="assets/images/fav.jpg">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
        	<!-- Style CSS
		============================================ -->
        <link rel="stylesheet" href="styles.css">
        

        <?php include 'header.php'?>  

               <!--Breadcrumb Banner Area Start-->

                    <div class="breadcrumb-banner-area"style="padding:40px;">
                        <div class="container" >
                            <div class="row"  >
                                <div class="breadcrumb-text"  >
                                   <h1 class="text-center"  >Login</h1>
                                   <div class="breadcrumb-bar">
                                        <ul class="breadcrumb text-center">
                                            <li><a href="index.html">Home</a></li>
                                            <li>Login</li>
                                        </ul>
                                    </div>    
                                </div>   
                            </div>
                        </div>
                    </div>
                <!--End of Breadcrumb Banner Area-->
 
 
                <!--login area Area Start-->
                    <div id="loginform" class="container-fluid" style="    background: linear-gradient(to left, #111111 0%, #DC143C 100%);">
                        <div class="container " style="padding-bottom:80px;">
                            <div class="col-xl-10 col-lg-11 mx-auto login-container">
                                <div class="row">
                                   
                                    <div class="col-lg-5 col-md-6 no-padding">
                                        <div class="login-box">
                                            <h5>Welcome Back!</h5>
                                            <div class="login-row btnroo row no-margin">
                                               <button class="btn btn-primary btn-sm btng"style=" background-color: #015DB2 !important; padding-left: 57px !important;  padding-right: 57px !important;"> Login with Facebook</button>
                                            </div>   
                                            <div class="login-row donroo row no-margin">
                                               <p>OR</a></p>
                                            </div>
                                            <div class="login-row btnroo row no-margin">
                                               <button class="btn btn-success  btn-sm btng"style=" background-color: #FF5768 !important;  padding-left: 57px !important;  padding-right: 77px !important;"> Login with Google</button>
                                            </div>
                <form action=" " method="post">
                                            <div class="login-row row no-margin">
                                                <label for=""><i class="fa fa-envelope"></i> Email Address</label>
                                                <input type="text" name="email" class="form-control form-control-sm">
                                            </div>
                
                                             <div class="login-row row no-margin">
                                                <label for=""><i class="fa fa-unlock-alt"></i> Password</label>
                                                <input type="text" name="password" class="form-control form-control-sm">
                                            </div>
                
                                             <div class="login-row row forrr no-margin">
                                               <p> <input type="checkbox"> Remember Me</p>
                                               <p><a class="vgh" href="">Forget Password?</a></p>
                                            </div>
                
                                             <div class="login-row btnroo row no-margin">
                                               <button class="btn btn-primary btn-sm btng"style="  padding-left: 117px !important;  padding-right: 117px !important;" name="submit"> Sign In</button>
                                               <a href="register.php#signup"><button class="btn btn-success  btn-sm btng"> Create Account</button></a>
                                            </div>
                                            </form>
                                            <div class="login-row donroo row no-margin">
                                               <p>Dont have an Account ? <a href="register.php#signup">Sign Up</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                     <div class="col-lg-7 col-md-6 img-box" >
                                        <img src="img/sideimg.png"  alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<?php
 include('connection.php');

  if (isset($_POST['submit'])) {
    $email=$_POST['email'];
   $password=$_POST['password'];

    $query=mysqli_query($con,"select * from users where useremail='$email' AND userpassword='$password' ");
        
   if ($query) {
   	  if (mysqli_num_rows($query)>0) {
            	  	
          header("location:createtext.php");
echo "<script> window.location.assign('createtext.php'); </script>";
        $epass = mysqli_fetch_assoc($query);
        $_SESSION['unamee']=$epass['username'];
      }else{
      	echo "<script>  alert('Invalid Credentails,Please Try Again')</script>";
      }
   }

  	
  }


?>
                <!--End of login Area-->













                <!--Newsletter Area Start-->
                <div class="newsletter-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 col-sm-5">
                                <div class="newsletter-content">
                                    <h3>SUBSCRIBE</h3>
                                    <h2>TO OUR NEWSLETTER</h2>
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-7">
                                <div class="newsletter-form angle">
                                    <form action="#" class="footer-newsletter fix">
                                        <div class="subscribe-form">
                                            <input type="email" name="email" placeholder="Enter your email address...">
                                            <button type="submit">SUBSCRIBE</button>
                                        </div>    
                                    </form>
                                    <!-- mailchimp-alerts Start -->
                                    <div class="mailchimp-alerts text-centre fix pull-right">
                                        <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                        <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                        <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                                    </div>
                                    <!-- mailchimp-alerts end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 
                <!--End of Newsletter Area-->
                <?php include 'footer.php' ?>
</html>

                