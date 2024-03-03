<?php
$conn=mysqli_connect("localhost","root","","beanpj",3310);
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM tbl_comment WHERE comment_id=$id";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    } else {
        header('location:Admincomment_1.php');
    }
}


?>
