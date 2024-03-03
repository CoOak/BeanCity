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

			$_SESSION['name'] = $data['name'];



			header("Location:main.php");
			exit;
			// code...
		} else {
			$failed = 1;

			header("location:Login.php");
			exit;
		}
		// code...
	} else {
		$_SESSION['msg'] = "Sign up First";
		header("location:Signin.php");
		exit;
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
