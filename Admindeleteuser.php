<?php
$conn=mysqli_connect("localhost","root","","beanpj",3310);
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM user WHERE ID=$id";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    } else {
        header('location:Adminuser.php');
    }
}


?>
