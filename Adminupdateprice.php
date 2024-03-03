<?php
$conn=mysqli_connect("localhost","root","","beanpj",3310);
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM pelprice WHERE ID=$id";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    } else {
        $row = mysqli_fetch_assoc($result);
    }
}

if (isset($_POST['update'])) {
    $item = $_POST['item_name'];

    $price = $_POST['price'];

    $query = "UPDATE pelprice SET item='$item',price='$price' WHERE ID=$id";
    mysqli_query($conn, $query);
    header('location:Adminprice.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Price</title>
    <link rel="stylesheet" type="text/css" href="Adminstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<h3 id="main_title" class=" text-center w-100 mb-4 mt-5">Price Update</h3>
<div class=" container">

    <form action="Adminupdateprice.php?id=<?php echo $id; ?>" method="post" id="form" >
        <div class="form-group">
            <label for="f_name">Item Name</label>
            <input type="text" name="item_name" class="form-control" value="<?php echo $row['item']; ?>" required=""><br>
        </div>

        <div class="form-group">
            <label for="age">Price</label>
            <input type="text" name="price" class="form-control" value="<?php echo $row['price']; ?>" required=""><br>
        </div>

        <input type="submit" name="update" class="btn btn-success" value="UPDATE">
    </form>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
