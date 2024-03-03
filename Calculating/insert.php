<?php
$conn=mysqli_connect("localhost","root","","beanpj",3310);
$sql="INSERT INTO pelprice(item,price) VALUES('mattpal','14500'),('groundnut','7000'),('bocate','10000'),('satawpal','9000'),('pelsinngon','8500'),('palhtawpat','13500'),('palkyi','7300'),('kalapal','8500'),('palpote','7500'),('pelti','12000')";
$query=mysqli_query($conn,$sql);
if ($query) {

	echo "Successful";
	// code...
}
  ?>