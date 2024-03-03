<?php
$con = mysqli_connect("localhost", "root", "", "beanpj", 3310);
$name = $_POST['name'];
$ph = $_POST['phone'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];
$sql = "SELECT * FROM user WHERE phone='$ph'";
$query = mysqli_query($con, $sql);
$no = mysqli_num_rows($query);
if ($no > 0) {

	echo "User already exit";
	// code...
} else {
	if ($pass == $cpass) {

		$s1 = "INSERT INTO user(name,phone,password) VALUES('$name','$ph','$pass')";
		$q2 = mysqli_query($con, $s1);

		if ($q2) {


			echo "registration successful";
			header("location:Login.php");
			// code...
		}
		// code...
	} else {
		echo "password and confirm password don't match";
	}
}
