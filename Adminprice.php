<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/c/CodingLabYT-->
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title> Responsive Sidebar Menu  | CodingLab </title>
    <link rel="stylesheet" href="Adminstyle.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
    .sidebar li a .links_name{
        color: #fff;
        font-size: 15px;
        font-weight: 400;
        padding: 10px;

        white-space: nowrap;
        opacity: 0;
        pointer-events: none;
        transition: 0.4s;
    }
    .sidebar{
        position: fixed;
        left: 0;
        top: 0;
        height: 100%;
        width: 80px;
        background: #11101D;
        padding: 6px 14px;
        z-index: 99;
        transition: all 0.5s ease;
    }
    table{
        font-size: 15px !important;
        width: 100%;
        padding: 20px!important;
    }
</style>
<body>
<div class="sidebar">
    <div class="logo-details">

    <a href="main.php" class=" text-decoration-none logo_name text-center w-100">Bean City</a>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">


        <li>
            <a href="Adminuser.php">

                <span class="links_name">User</span>

            </a>

        </li>
        <li>
            <a href="Admincomment_1.php">

                <span class="links_name">Comment</span>
            </a>

        </li>

        <li>
            <a href="Adminprice.php">

                <span class="links_name">Price</span>
            </a>

        </li>

        <li class="profile">

            <a href="AdminLogin.php" class=" w-100 links_name text-center ps-3">Log Out <i class='bx bx-log-out' id="log_out" ></i></a>


        </li>
    </ul>
</div>
<section class="ps-5 home-section">
    <div class="container pt-5">

        <h2 class="mb-5">Price </h2>

        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title></title>
        </head>
        <body>

        <table class="table">
            <thead>
            <tr>

                <th>Item Name</th>
                <th>Price</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $con=mysqli_connect("localhost","root","","beanpj",3310);
            $query="SELECT * FROM pelprice";
            $result=mysqli_query($con,$query);
            if(!$result){
                die("Connection failed: " . mysqli_connect_error());
            }
            else{
                while ($row=mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>

                        <td><?php echo $row['item'];  ?></td>
                        <td><?php echo $row['price'];  ?></td>
                        <td><a href="Adminupdateprice.php? id= <?php echo $row['ID'];  ?>" class="">Update</a></td>


                        <td><a href="Admindeleteprice.php? id= <?php echo $row['ID'];  ?>" class="">Delete</a></td>


                    </tr>
                    <?php
                }
            }
            ?>

            </tbody>
        </table>

        </body>
        </html>





    </div>
</section>

<script src="script.js"></script>

</body>
</html>
