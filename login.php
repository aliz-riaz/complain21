<?php
use Phppot\Member;

if (! empty($_POST["login-btn"])) {
    require_once __DIR__ . '/Model/Member.php';
    $member = new Member();
    $loginResult = $member->loginMember();
}
?>
<!doctype html>
<html lang="en">
<head>
<title>Login</title>
<link href="assets/css/phppot-style.css" type="text/css"
	rel="stylesheet" />
<link href="assets/css/user-registration.css" type="text/css"
	rel="stylesheet" />
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"  />
    <link rel="stylesheet" type="text/css" href="assets/fonts/linotte/stylesheet.css">
    <link rel="stylesheet" href="assets/css/main.css"  />
<script src="vendor/jquery/jquery-3.3.1.js" type="text/javascript"></script>
</head>
<body>

	<div class="global-container">
		<div class="card login-form">
		<div class="card-body">
			<h3 class="card-title text-center">Login</h3>
			<div class="card-text">
				<!--
				<div class="alert alert-danger alert-dismissible fade show" role="alert">Incorrect username or password.</div> -->
				<?php if(!empty($loginResult)){?>
				<div class="alert alert-danger"><?php echo $loginResult;?></div>
				<?php }?>
				<form name="login" action="" method="post"
					onsubmit="return loginValidation()">  
					<!-- to error: add class "has-danger" -->
					<div class="form-group">
						<label for="username">Email address</label>
						<input type="text" class="form-control form-control-sm" id="username" name="username">
						<span class="required error" id="username-info"></span>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<a href="#" style="float:right;font-size:12px;">Forgot password?</a>
						<input type="password" class="form-control form-control-sm" name="login-password" id="login-password">
						<span class="required error" id="login-password-info"></span>
					</div>
					<button type="submit" class="btn btn-primary btn-block"  name="login-btn"
							id="login-btn" value="Login">Sign in</button>
					
					<div class="sign-up">
						Don't have an account? <a href="#">Create One</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	</div>
	<!-- <div class="phppot-container">
		<div class="sign-up-container">
			<div class="login-signup">
				<a href="user-registration.php">Sign up</a>
			</div>
			<div class="signup-align">
				<form name="login" action="" method="post"
					onsubmit="return loginValidation()">
					<div class="signup-heading">Login</div>
				<?php if(!empty($loginResult)){?>
				<div class="error-msg"><?php echo $loginResult;?></div>
				<?php }?>
				<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Username<span class="required error" id="username-info"></span>
							</div>
							<input class="input-box-330" type="text" name="username"
								id="username">
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Password<span class="required error" id="login-password-info"></span>
							</div>
							<input class="input-box-330" type="password"
								name="login-password" id="login-password">
						</div>
					</div>
					<div class="row">
						<input class="btn" type="submit" name="login-btn"
							id="login-btn" value="Login">
					</div>
				</form>
			</div>
		</div>
	</div> -->
	<script src="assets/js/bootstrap.min.js" ></script>
	<script>


function loginValidation() {
	var valid = true;
	$("#username").removeClass("error-field");
	$("#password").removeClass("error-field");

	var UserName = $("#username").val();
	var Password = $('#login-password').val();

	$("#username-info").html("").hide();

	if (UserName.trim() == "") {
		$("#username-info").html("required.").css("color", "#ee0000").show();
		$("#username").addClass("error-field");
		valid = false;
	}
	if (Password.trim() == "") {
		$("#login-password-info").html("required.").css("color", "#ee0000").show();
		$("#login-password").addClass("error-field");
		valid = false;
	}
	if (valid == false) {
		$('.error-field').first().focus();
		valid = false;
	}
	return valid;
}
</script>
</BODY>
</HTML>
