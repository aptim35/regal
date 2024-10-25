<?php 
require_once 'islem/baglanti.php';

?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel</title>
    
    
<style>
    .container {
	display: flex;
	align-items: center;
	justify-content: center;
	min-height: 100vh;
}

.screen {		
	background: linear-gradient(90deg, #4DB6AC,#B2DFDB);		
	position: relative;	
	height: 600px;
	width: 360px;	
	box-shadow: 0px 0px 24px #80CBC4;
}

.screen__content {
	z-index: 1;
	position: relative;	
	height: 100%;
}

.screen__background {		
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	z-index: 0;
	-webkit-clip-path: inset(0 0 0 0);
	clip-path: inset(0 0 0 0);	
}

.screen__background__shape {
	transform: rotate(45deg);
	position: absolute;
}

.screen__background__shape1 {
	height: 520px;
	width: 520px;
	background: #FFF;	
	top: -50px;
	right: 120px;	
	border-radius: 0 72px 0 0;
}
.login {
	width: 320px;
	padding: 30px;
	padding-top: 156px;
}

.login__field {
	padding: 20px 0px;	
	position: relative;	
}

.login__icon {
	position: absolute;
	top: 30px;
	color: #7875B5;
}

.login__input {
	border: none;
	border-bottom: 2px solid #D1D1D4;
	background: none;
	padding: 10px;
	padding-left: 24px;
	font-weight: 700;
	width: 75%;
	transition: .2s;
}

.login__input:active,
.login__input:focus,
.login__input:hover {
	outline: none;
	border-bottom-color: #4DB6AC;
}

.login__submit {
	background: #fff;
	font-size: 14px;
	margin-top: 30px;
	padding: 16px 20px;
	border-radius: 26px;
	border: 1px solid #4DB6AC;
	font-weight: 700;
	display: flex;
	align-items: center;
	width: 100%;
	color: #4DB6AC;
	box-shadow: 0px 2px 2px #4DB6AC;
	cursor: pointer;
	transition: .2s;
}

.login__submit:active,
.login__submit:focus,
.login__submit:hover {
	border-color: #6A679E;
	outline: none;
}

.button__icon {
	font-size: 24px;
	margin-left: auto;
	color: #7875B5;
}

</style>
  </head>
  <body style="background:#E0F2F1">
   <div class="container">
	<div class="screen">
		<div class="screen__content">
			<form action="islem/islem.php" method="POST" class="login">
			    <h3 style=color:#7875B5>Cahit Cenksoy Admin Panel</h3>
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input name="kadi" type="text" class="login__input" placeholder="Kullanıcı adı">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input name="sifre" type="password" class="login__input" placeholder="Şifre">
				</div>
				<button name="girisyap" class="button login__submit">
					<span class="button__text">Giriş Yap</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>				
			</form>
		</div>
		<div class="screen__background">
        	<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>




  </body>
</html>
















