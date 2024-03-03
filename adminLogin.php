<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/admin.css">
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
</style>

<body>

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
                    <p style="color: red;"><?php echo "Username or Password incorrect"; ?></p>
                <?php } ?>
                <input value="အကောင့်၀င်ပါ" type="submit" class="login-button" name="submit" />
            </form>

        </div>
    </section>


</body>

</html>

<?php
session_start();
if (isset($_POST['submit'])) {


    $error = false;


    $name = $_POST['name'];
    $_SESSION['name']=$name;
    $pass = $_POST['pass'];

    if ($name == 'BeanCity' && $pass == '123456') {

        header("location:adminUser.php");
    } else {
        $error = true;
    }
}




?>