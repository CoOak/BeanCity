<?php

?>
<?php


session_start();

$con = mysqli_connect("localhost", "root", "", "beanpj", 3310);
if (!$con) {

	die("Not connected" . mysqli_error());
	// code...
}

if (isset($_POST['submit'])) {

	$name = $_POST['name'];

	$pass = $_POST['pass'];

	$sql = "SELECT * FROM user WHERE name='$name'";
	$query = mysqli_query($con, $sql);
	$no = mysqli_num_rows($query);

	if ($no > 0) {

		$data = mysqli_fetch_assoc($query);
		if ($data['password'] == $pass) {
			header("Location:main.php");
			$_SESSION['name'] = $data['name'];
		} else {

			$error = "Invalid username or password";
		}
		// code...
	} else {
		$exist = "Account does not exist";
	}
	// code...
}
if (isset($_POST['cmt'])) {




	if (isset($_SESSION["name"])) {
		header("location:comment.php");
	} else {
		echo "Login First";
	}


	// code...
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/login.css">
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="node_modules/wow.js/css/libs/animate.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Anton&family=Cinzel+Decorative:wght@700;900&family=Noto+Sans+Myanmar:wght@100;200;300;400;500;600;700;800;900&family=Orbitron:wght@600;700;800&family=Roboto+Slab:wght@300;400;500;600;700&family=Rokkitt:wght@300;400&display=swap" rel="stylesheet">
</head>
<style>
	.login {
		background-image: url('img/loginbg.jpg');
		object-fit: cover;
		background-size: 1600px 768px;
		height: 750px;
		object-position: right;
		background-position: center;
	}

	.nav-link {
		color: #fff !important;
		font-family: "Noto Sans Myanmar", sans-serif !important;
		font-style: normal;
		font-weight: 400 !important;
		font-size: 17px !important;
	}

	.dropdown:hover .dropdown-menu {
		display: block !important;
		margin-top: 1px !important;
		opacity: 1;
		/* Ensure the menu is fully visible */
		transition: opacity 2s ease !important;
	}
</style>

<body>

	<?php

	?>

	<!-- <div class="container">
		<div class="heading">Sign In</div>
		<form class="form" action="loginServlet.php" method="POST">
			<input placeholder="Username" id="email" name="name" class="input" required="" />
			<input placeholder="Password" id="password" name="pass" type="password" class="input" required="" />
			<span class="forgot-password"><a href="#">Forgot Password ?</a></span>
			<input value="Sign In" type="submit" class="login-button" name="submit" />
		</form>
		<div class="social-account-container">
			<span class="title">Or Sign in with</span>
			<div class="social-accounts">
				<button class="social-button google">
					<svg viewBox="0 0 488 512" height="1em" xmlns="http://www.w3.org/2000/svg" class="svg">
						<path d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"></path>
					</svg>
				</button>
				<button class="social-button apple">
					<svg viewBox="0 0 384 512" height="1em" xmlns="http://www.w3.org/2000/svg" class="svg">
						<path d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z"></path>
					</svg>
				</button>
				<button class="social-button twitter">
					<svg viewBox="0 0 512 512" height="1em" xmlns="http://www.w3.org/2000/svg" class="svg">
						<path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"></path>
					</svg>
				</button>
			</div>
		</div>
		<span class="agreement"><a href="#">Learn user licence agreement</a></span>
	</div> -->

	<div class="">

		<nav class="navbar navbar-expand-lg nav-bar fixed-top shadow-lg mb-5">
			<div class="container">
				<a class="navbar-brand d-flex" href="adminLogin.php">
					<img src="img/logo.png" class="logo" alt="" />
					<span class="brand_name mt-2 ms-2">Bean City</span>
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mx-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link " aria-current="page" href="main.php">မူလစာမျက်နှာ</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#"></a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								ပဲအမျိုးအစားများ
							</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="mattpal.php">မတ်ပဲ</a></li>
								<li>
									<hr class="dropdown-divider" />
								</li>
								<li><a class="dropdown-item" href="GroundNut.php">မြေပဲ</a></li>
								<li>
									<hr class="dropdown-divider" />
								</li>
								<li><a class="dropdown-item" href="bocate.php">ဘိုကိတ်</a></li>
								<li>
									<hr class="dropdown-divider" />
								</li>
								<li><a class="dropdown-item" href="satawpal.php">စားတော်ပဲ</a></li>
								<li>
									<hr class="dropdown-divider" />
								</li>
								<li><a class="dropdown-item" href="pal.php">ပဲစင်းငုံ</a></li>
								<li>
									<hr class="dropdown-divider" />
								</li>
								<li><a class="dropdown-item" href="palhtawpat.php">ပဲထောပတ်</a></li>
								<li>
									<hr class="dropdown-divider" />
								</li>
								<li><a class="dropdown-item" href="pelkyi.php">ပဲကြီး</a></li>
								<li>
									<hr class="dropdown-divider" />
								</li>
								<li><a class="dropdown-item" href="kalapal.php">ကုလားပဲ</a></li>
								<li>
									<hr class="dropdown-divider" />
								</li>
								<li><a class="dropdown-item" href="pelpote.php">ပဲပုပ်</a></li>
								<li>
									<hr class="dropdown-divider" />
								</li>
								<li><a class="dropdown-item" href="palti.php">ပဲတီစိမ်း</a></li>
								<li>

								</li>
							</ul>
						</li>

						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" onclick="Click()" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								စျေးနှုန်းများ
							</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="price.php">ယနေ့ပဲဈေးနှုန်းများ</a></li>
								<li>
									<hr class="dropdown-divider" />
								</li>
								<li><a class="dropdown-item" href="option.php">ခန့်မှန်းကုန်ကျငွေ တွက်ရန်</a></li>





							</ul>

						</li>





						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								ပဲအကြောင်းသိကောင်းစရာ
							</a>
							<ul class="dropdown-menu">
								<li>
									<a class="dropdown-item" href="yawgar.php">ကျရောက်နိုင်သောရောဂါပိုမွှားများ</a>
								</li>
								<li>
									<hr class="dropdown-divider" />
								</li>
								<li><a class="dropdown-item" href="poethatsay.php">ဆေးများ</a></li>
								<li>
									<hr class="dropdown-divider" />
								</li>

								<li>
									<?php


									if (isset($_SESSION['name'])) {
										echo '<a class="dropdown-item" href="comment_1.php">အမေးအဖြေ</a>';
									} else {
										echo '<a class="dropdown-item" onclick="showSweetAlert()">အမေးအဖြေ</a>';
									} ?>
								</li>
							</ul>
						</li>
					</ul>
					<form class="d-flex" role="search">





						<?php


						if (isset($_SESSION['name'])) {
							echo '<div class="dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' . $_SESSION['name'] . '
                
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="LogoutServlet.php">Logout</a>
              </div>
            </div>';
						} else {
							echo '



                            <a class="nav-link " aria-current="page" href="Login.php">အကောင့်၀င်ရန်</a>
                  


              

            ';
						}


						?>
					</form>
				</div>
			</div>
		</nav>
	</div>
	<section class="login">

		<div class="login-box">
			<p>အကောင့်၀င်ရန်</p>
			<?php if (isset($exist)) { ?>
				<p style="color: red;"><?php echo $exist; ?></p>
			<?php } ?>
			<form class="form" action="" method="POST">
				<div class="user-box">
					<input required="" id="email" name="name" type="text">
					<label>အမည်</label>
				</div>
				<?php



				?>
				<div class="user-box">
					<input required="" id="password" name="pass" type="password">
					<label>စကားဝှက်</label>
				</div>
				<?php if (isset($error)) { ?>
					<p style="color: red;"><?php echo $error; ?></p>
				<?php } ?>
				<input value="အကောင့်၀င်ပါ" type="submit" class="login-button" name="submit" />
			</form>
			<p class="mt-3">အကောင့်မရှိဘူးလား? <a href="Signin.php" class="a2 mt-3">အကောင့် အသစ်ဖွင့်ပါ</a></p>
		</div>
	</section>


</body>

</html>