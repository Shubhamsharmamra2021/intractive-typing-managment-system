<?php
 session_start();
require ('logincheck.php');
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Register || Educat</title>
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
                               <h1 class="text-center"  >Register</h1>
                               <div class="breadcrumb-bar">
                                    <ul class="breadcrumb text-center">
                                        <li><a href="index.html">Home</a></li>
                                        <li>Register</li>
                                    </ul>
                                </div>    
                            </div>   
                        </div>
                    </div>
                </div>
                <!--End of Breadcrumb Banner Area-->
                  <!--Register Area Start-->
                 
                <div id="signup" class="container-fluid" style="    background: linear-gradient(to left, #111111 0%, #DC143C 100%);">
                        <div class="container " style="padding-bottom:80px;">
                            <div class="col-xl-10 col-lg-11 mx-auto login-container">
                                <div class="row">
                                   
                                    <div class="col-lg-5 col-md-6 no-padding">
                                        <div class="login-box">
                                            <h5>Welcome Back!</h5>
                                            <div class="login-row btnroo row no-margin">
                                               <button class="btn btn-primary btn-sm btng" style=" background-color: #015DB2 !important; padding-left: 57px !important;  padding-right: 57px !important;"> Login with Facebook</button>
                                            </div>   
                                            <div class="login-row donroo row no-margin">
                                               <p>OR</a></p>
                                            </div>
                                            <div class="login-row btnroo row no-margin">
                                               <button class="btn btn-success  btn-sm btng" style=" background-color: #FF5768 !important;  padding-left: 57px !important;  padding-right: 77px !important;"> Login with Google</button>
                                            </div>
                                         <form action="login.php" method="POST">
                                            <div class="login-row row no-margin">
                                                <label for=""><i class="fa fa-graduation-cap "></i> Name</label>
                                                <input type="text" name="Cname" class="form-control form-control-sm">
                                            </div>

                                            <div class="login-row row no-margin">
                                                <label for=""><i class="fa fa-phone"></i> Mobile Number</label>
                                                <input type="text"  name="Cmobile" class="form-control form-control-sm">
                                            </div>
                                            <div class="login-row row no-margin">
                                                <label for=""><i class="fa fa-envelope"></i> Email Address</label>
                                                <input type="text"  name="Cemail" class="form-control form-control-sm">
                                            </div>
                                            
											

                                             <div class="login-row row no-margin">
                                                <label for=""><i class="fa fa-unlock-alt"></i> Password</label>
                                                <input type="text"  name="Cpassword" class="form-control form-control-sm">
                                            </div>

                                            <div class="login-row row forrr no-margin">
                                               <p> <input type="checkbox"> Remember Me</p>
                                            </div>
                
                                            <div class="login-row btnroo row no-margin">
                                               <input type="submit" name="Submit" placeholder="Sign up"class="btn btn-primary btn-sm btng"style=" background-color: #2BD185; background-color : hover: #111111 !important; border:#86BC42; padding-left: 117px !important;  padding-right: 117px !important;"/>
                                            </div>
                                          </form>
                                            <div class="login-row donroo row no-margin">
                                               <p> You have an Account ? <a href="login.php#loginform">Sign In</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-7 col-md-6 img-box">
                                        <img src="img/sideimg.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 

                 <!--End of Register Area-->
                    <?php
                    include ('connection.php');
                     $slug='';
                       if(isset($_POST['Submit'])){
                                     $slug=preg_replace('/[^a-z0-9]+/i', '-', trim (strtolower($_POST['Cname'])));
                                                       
                                        $Cname        =  $_POST['Cname'];
                                        $Cemail        =  $_POST['Cemail'];
                                        $cmobile     =$_POST['Cmobile'];
                                        $Cpassword        =  $_POST['Cpassword']; 
                                        $insertquery =" insert into users(username, useremail, usermobile, userpassword, Slugname ) values ('$Cname', '$Cemail', '$cmobile', '$Cpassword','$slug' ) "; 
                                        $res=mysqli_query($con,$insertquery);
                                         
                                        if($res){
                                             header('Location:register.php');

                                        }
                                        else{
                    
                                            echo die(mysqli_error($db));
                                        }
                    
                                       }   
                                       
                                        
                    ?>                    
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