<?php

include("nav.php");

?>

<div class="container topHeight">
    <div class=" d-flex"><img width="60" height="60" src="https://img.icons8.com/bubbles/100/user.png" alt="user" />
        <h5 class=" fw-bold ms-1" style="
    padding-top: 20px;
">Mark</h5>
        <p class="ms-5 fs-6" style="padding-top: 20px;">. &nbsp;&nbsp; 1h</p>
    </div>

    <p class=" mt-3">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error harum deleniti inventore minima. Eius illum vel culpa ratione. Officia molestias eum porro, sequi illum rem dolores vitae ipsam eligendi reprehenderit.
    </p>

    <a href="" class=" text-decoration-none fw-bold">Reply</a>




</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <?php
                    $con = mysqli_connect("localhost", "root", "", "beanpj", 3310);
                    if (isset($_POST['caculate'])) {



                        $pel = $_POST['kind'];
                        $aca = $_POST['aca'];
                        $price = $_POST['price'];

                        if ($pel == 'မတ်ပဲ') {

                            $sql = "SELECT * FROM pelprice WHERE item='mattpal'";
                            $query = mysqli_query($con, $sql);
                            while ($a = mysqli_fetch_assoc($query)) {
                                $pelprice = $a['price'];
                                // code...
                            }
                            $myosae = $pelprice * $aca;

                            $htunset = 60000 * $aca;
                            $myay = 60000 * $aca;
                            $say = 400000 * $aca;
                            $alote = $price * 40 * $aca;
                            $ahtwe = 300000 * $aca;
                            $revenue = 1580000 * $aca;
                            $kone = $myosae + $htunset + $myay + $say + $alote + $ahtwe;
                            $profit = $revenue - $kone;

                            echo '
   
                        <h1>ခန့်မှန်းကုန်ကျစရိတ်/အမြတ်ငွေတွက်ချက်မှု</h1>
                        <p>မျိုးစေ့ကုန်ကျစရိတ်:' . $myosae . '</p>
                        <p>ထွန်စက်မောင်းခ:' . $htunset . '</p>
                        <p>မြေညှိခ:' . $myay . '</p>
                        <p>ဆေးအမျိုးမျိုးကုန်ကျစရိတ်:' . $say . '</p>
                        <p>အလုပ်သမားခ:' . $alote . '</p>
                        <p>ခန့်မှန်းအထွေထွေကုန်ကျစရိတ်:' . $ahtwe . '</p>
                        <p>ခန့်မှန်းစုစုပေါင်းကုန်ကျစရိတ်:' . $kone . '</p>
                        <p>တစ်ဧကပျမ်းမျှအထွက်နှုန်း-၁၆တင်းခန့်မှန်း၀င်ငွေ:' . $revenue . '</p>
                        <p>ခန့်မှန်းအမြတ်ငွေ:' . $profit . '</p>

           
';
                        } elseif (empty($_POST['kind'])) {
                            echo "No data";
                        }
                    }   ?>


                </div>
            </div>
        </div>