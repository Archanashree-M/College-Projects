<?php
ob_start();
session_start();
$error_message = '';

include "apis/config/config.php";

if (isset($_SESSION['ecom_website_admin'])) {
    header('location: index.php');
    exit;
}

if (isset($_POST['login'])) {
    $username = strip_tags($_POST['email']);
    $password = strip_tags($_POST['password']);

    if (!empty($username) && !empty($password)) {
        $statement = $pdo->prepare("SELECT * FROM `tbl_admin` WHERE email=? AND password=?");
        $statement->execute([$username, $password]);
        $total = $statement->rowCount();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        if ($total == 0) {
            $error_message = "Email & Password don't match";
        } else {
            $_SESSION['ecom_website_admin'] = $result[0];
            header("location: index.php");
            exit;
        }
    } else {
        $error_message = 'Username or Password cannot be empty';
    }
} else {
    $error_message = 'Invalid request';
}

// Rest of your code for settings retrieval...

$statement = $pdo->prepare("SELECT * FROM `tbl_settings`");
$statement->execute();
$totals = $statement->rowCount();
$setting = $statement->fetchAll(PDO::FETCH_ASSOC);

if ($totals == 0) {
    header("location: create-panel-info.php");
    exit;
} else {
    $_SESSION['setting'] = $setting[0];
}
?>

<!doctype html>
<html lang="en">
    <head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="<?=$_SESSION['setting']['site_favicon']?>" type="image/png" />
	<!--plugins-->
	<link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />
	<script src="assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="assets/css/app.css" rel="stylesheet">
	<link href="assets/css/icons.css" rel="stylesheet">
	<title>LOGIN - <?=$_SESSION['setting']['site_name']?></title>
</head>

<body class="">
	<!--wrapper-->
	<div class="wrapper">
		<div class="section-authentication-cover">
			<div class="">
				<div class="row g-0">

					<div class="col-12 col-xl-7 col-xxl-8 auth-cover-left align-items-center justify-content-center d-none d-xl-flex">

                        <div class="card shadow-none bg-transparent shadow-none rounded-0 mb-0">
							<div class="card-body">
                                 <img src="assets/images/login-images/login-cover.svg" class="img-fluid auth-img-cover-login" width="650" alt=""/>
							</div>
						</div>
						
					</div>

					<div class="col-12 col-xl-5 col-xxl-4 auth-cover-right align-items-center justify-content-center">
						<div class="card rounded-0 m-3 shadow-none bg-transparent mb-0">
							<div class="card-body p-sm-5">
								<div class="">
									<div class="mb-3 text-center">
                                           <!--<b style="font-size: 33px; color: cadetblue; font-weight: 600;"><?=$_SESSION['setting']['site_name']?></b>-->				
                                            <img src="<?=$_SESSION['setting']['site_logo']?>" width="200" alt="<?=$_SESSION['setting']['site_name']?>" style="width: 88%;">
									</div>
									<div class="text-center mb-4">
										<!--<h5 class="">Rocker Admin</h5>-->
										<p class="mb-0">Please log in to your account</p>
									</div>
									<div class="form-body">
										<form action="" method="post" accept-charset="utf-8" class="row g-3">
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Email</label>
												<input type="email" name="email" class="form-control" id="inputEmailAddress" placeholder="jhon@example.com">
											</div>
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Password</label>
												<div class="input-group" id="show_hide_password">
													<input type="password" name="password" class="form-control border-end-0" id="inputChoosePassword" value="" placeholder="Enter Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class="bx bx-hide"></i></a>
												</div>
											</div>
											<div class="col-md-6" style="display:none">
											    <input type="radio" name="user_type" class="" value="1" checked style="width: 16px;height: 14px;">
											    <label style="font-size: 16px; font-weight: 500;">Users</label>
											</div>
											<!--<div class="col-md-6">
											    <input type="radio" name="user_type" class="" value="2" style="width: 16px;height: 14px;">
											    <label style="font-size: 16px; font-weight: 500;">Clients</label>
											</div>-->
											<div class="col-md-6">
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
													<label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
												</div>
											</div>
											<div class="col-md-6 text-end">	<a href="forgot-password.php">Forgot Password ?</a>
											</div>
											
											<?php 
                                    	    if( (isset($error_message)) && ($error_message!='') ):
                                    	        echo '<div class="error" style="color:red;">'.$error_message.'</div>';
                                    	    endif;
                                    	    ?>
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" name="login" class="btn btn-primary">Sign in</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
				<!--end row-->
			</div>
		</div>
	</div>
	<!--end wrapper-->
	<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!--Password show & hide js -->
	<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>
	<!--app JS-->
	<script src="assets/js/app.js"></script>
</body>
</html>
<script>
      $(document).ready(function(){
        $("#login").click(function(){
            var mobile = $('#mobile').val();
            var password = $('#password').val();
            if(mobile==''){
                $('#mobile_error').text('enter mobile number');
            }else if(password==''){
                $('#password_error').text('enter password');
            }else{
                  $.ajax({
                    url: "api/login.php",
                    type: "POST",
                    dataType:'json',
                    data: { mobile : mobile,password:password,type:'login' },
                    success: function(res){
                        if(res['error']){
                            $('#error_msg').text(res['message']);
                        }else{
                            $('#success_msg').text(res['message']);
                           window.location.href = 'home.php';
                        }
                        console.log('res'+res['error']);
                    }
                });   
                //window.location.href = 'home.php';
            }
        });
        
        
        $("#mobile").on("keyup change", function(e) {
            $('#mobile_error').text('');$('#error_msg').text('');$('#success_msg').text('');
        });
        $("#password").on("keyup change", function(e) {
            $('#password_error').text('');$('#success_msg').text('');$('#error_msg').text('');
        });
        
      });
  </script>