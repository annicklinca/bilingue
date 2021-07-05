<?php

include '../dbconnect.php';

if (isset($_POST['login'])) {
   
    session_start();

	$email=$_POST['email'];
	$password=md5($_POST['password']);
	$email=stripcslashes($email);
	$password=stripcslashes($password);
	$email=mysqli_real_escape_string($dbi,$email);
	$password=mysqli_real_escape_string($dbi,$password);
    
	if (empty($email) || empty($password)) {
		header("location:index.php?empty=Email and Password are required");
	}
	else {
		$select=mysqli_query($dbi,"SELECT * FROM user WHERE email='$email' AND password='$password' ") or die(mysqli_error($dbi)) ;
		
        if (mysqli_num_rows($select)>0) {

	        session_regenerate_id();
	        $verfied=mysqli_fetch_assoc($select); 

	        $_SESSION['adminid']=$verfied['id'] ;
	        $_SESSION['adminusername']=$verfied['username'] ;
	        $_SESSION['adminemail']=$verfied['email'] ;
	        $_SESSION['adminphonenumber']=$verfied['phonenumber'] ;
	        $_SESSION['adminpassword']=$verfied['password'] ;
	        $_SESSION['adminrole']=$verfied['role'] ;
	        session_write_close();
            
            if ($verfied['role']=='admin') {
                header("location:index.php");
            }
            elseif ($verfied['role']=='resident') {
                
                header("location:resident/index.php");
            }
            else {
                $errormessage .='You do not have account';	
            }

		}
		else {
            $errormessage .='You do not have account';			
		}
	}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>EBPP</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="CodedThemes">
    <meta name="keywords" content=" Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="CodedThemes">
    <!-- Favicon icon -->
    <!-- Google font--><link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body class="fix-menu">
    <!-- Pre-loader start -->
    <div class="theme-loader">
    <div class="ball-scale">
        <div class='contain'>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
        </div>
    </div>
</div>
    <!-- Pre-loader end -->
    <section class="login p-fixed d-flex text-center bg-primary ">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    <div class="signup-card card-block auth-body mr-auto ml-auto">
                        <form class="md-float-material" method="post" action="">
                            <div class="text-center">
                                <h2>EBPP Dashboard</h2> 
                            </div>
                            <div class="auth-box">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center txt-primary">Admin Login</h3>
                                    </div>
                                </div>
                                <?php
                                      if ( isset($errormessage)) {
                                        echo '
                                            <div class="card borderless-card">
                                                <div class="card-block danger-breadcrumb">
                                                    <div class="breadcrumb-header">
                                                        <span>'.$errormessage.'</span>
                                                    </div>
                                                </div>
                                            </div>
                                        ';
                                      }
                                    ?>
                                <hr/>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="email" placeholder="Your Email Address">
                                    <span class="md-line"></span>
                                </div>
                                <div class="input-group">
                                    <input type="password" class="form-control" name="password" placeholder="Choose Password">
                                    <span class="md-line"></span>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                    <input type="submit" value="Login now." name="login" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">
                                    </div>
                                </div>
                                
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <h6 class="text-left txt-primary"></h6>
                                    </div>
                                </div>
                                <hr/>
                            </div>
                        </form>
                        <!-- end of form -->
                    </div>
                    <!-- Authentication card end -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
	
    <script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>
    <script type="text/javascript" src="assets/js/modernizr/css-scrollbars.js"></script>
    <script type="text/javascript" src="assets/js/common-pages.js"></script>
</body>

</html>
