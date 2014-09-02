<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>login</title>
<meta charset="utf-8"  />
<link type="text/css" rel="stylesheet" href="css/ui.css" />
<script language="javascript">
	function changeImage(id){ 
		document.getElementById(id).src ='getVerify.php?'+Math.random(1);
   }
</script>
</head>
<body>
	<div id="header">
		<div id="hourse">
			<a  href="">
				<img src="img/logo.png" alt="" />
			</a>
			<span>&nbsp;&nbsp;LogIn</span>
		</div>
	</div>
	<div id="content">
		<div class="loginBox">
			<form id="" enctype="multipart/form-data" action="doLogin.php" method="post">
				<ul>
					<li class="word">Manager Account</li>
					<li class="">
						<input type="text" id="" name="username" maxlength="50" value=""
							class="txt" />
						<div class="user"></div>
					</li>
					<li class="word">Password</li>
					<li class="">
						<input type="password" id="" name="password" maxlength="20"
							value="" class="txt" />
						<div class="pwd"></div>
					</li>
					<li class="word">Captcha</li>
					<li class="">
						<input type="text" id="" name="verify" value="" class="txt captcha" />
						<a href="javascript:void(0); "onclick="changeImage('verify')"><img src="getVerify.php" alt="" id="verify"style="margin-left: 20px;"title="invisibility?"  /></a>
						<a href="javascript:void(0);" onclick="changeImage('verify')"style="text-decoration:underline;margin-left:10px;">Change</a>
					</li>
					<li class="remember">
						<label for="chk"><input type="checkbox" id="chk" name="remember" value="1" class="" />&nbsp;remember(a week)</label>
						<a href="#"  style="margin-left:30px;">Forgot your password?</a>
					</li>
					<li id="margin">
						<input type="submit" id="" name="" value="sign in" class="login_btn" />
					</li>
				</ul>
			</form>
		</div>
	</div>
	<div id="footer">
		<p>
			<a href="#">bref</a>|
			<a href="#">notice</a>|
			<a href="#">links</a>|
			<a href="#">contact us</a>|
			Hotline:400-7765-7599
		</p>
		<p>Copyright &copy; 2006 - 2014 mozbuy Ltd. All Rights Reserved</p>
	</div>
</body>
</html>