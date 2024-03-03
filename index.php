<?php

session_start();
include('header.php');
include('helper.php');

$user = array();


if (isset($_SESSION['userID'])) {

    $con = mysqli_connect("localhost", "root", "", "beanpj", 3310);

    $user = get_user_info($con, $_SESSION['userID']);
}

?>

<section id="main-site">
    <div class="container py-5">
        <div class="row">
            <div class="col-4 offset-4 shadow py-4">
                <div class="upload-profile-image d-flex justify-content-center pb-5">
                    <div class="text-center">
                        <img class="img rounded-circle" style="width: 200px; height: 200px;" src="<?php echo isset($user['profileImage']) ? $user['profileImage'] : './assets/profile/beard.png'; ?>" alt="">
                        <h4 class="py-3">
                            <?php
                            if (isset($user['fName'])) {
                                printf('%s', $user['fName']);
                            }
                            ?>
                        </h4>
                    </div>
                </div>

                <div class="user-info px-3">
                    <ul class="font-ubuntu navbar-nav">
                        <li class="nav-link"><b>အမည်: </b><span><?php echo isset($user['fName']) ? $user['fName'] : ''; ?></span></li>


                        <li class="nav-link"><b>ဖုန်းနံပါတ်: </b><span><?php echo isset($user['ph']) ? $user['ph'] : ''; ?></span></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>

<?php
include "footer.php";
?>