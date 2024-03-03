<?php
$con = mysqli_connect("localhost", "root", "", "beanpj", 3310);

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
    $say = 200000 * $aca;
    $alote = $price * 30;
    $ahtwe = 300000 * $aca;
    $revenue = 1580000 * $aca;
    $kone = $myosae + $htunset + $myay + $say + $alote + $ahtwe;
    $profit = $revenue - $kone;
    echo "<div class='container'>
        <img src='Close-36.png' class='close' />
        <h1>ခန့်မှန်းကုန်ကျစရိတ်/အမြတ်ငွေတွက်ချက်မှု</h1>
        <p>မျိုးစေ့ကုန်ကျစရိတ်:$myosae</p>
        <p>ထွန်စက်မောင်းခ:$htunset</p>
        <p>မြေညှိခ:$myay</p>
        <p>ဆေးအမျိုးမျိုးကုန်ကျစရိတ်:$say</p>
        <p>အလုပ်သမားခ:$alote</p>
        <p>ခန့်မှန်းအထွေထွေကုန်ကျစရိတ်:$ahtwe</p>
        <p>ခန့်မှန်းစုစုပေါင်းကုန်ကျစရိတ်:$kone</p>
        <p>တစ်ဧကပျမ်းမျှအထွက်နှုန်း-၁၆တင်းခန့်မှန်း၀င်ငွေ:$revenue</p>
        <p>ခန့်မှန်းအမြတ်ငွေ:$profit</p>
            
    </div>";
} elseif ($pel == 'မြေပဲ') {

    $sql = "SELECT * FROM pelprice WHERE item='groundnut'";
    $query = mysqli_query($con, $sql);
    while ($a = mysqli_fetch_assoc($query)) {
        $pelprice = $a['price'];
        // code...
    }
    $myosae = $pelprice * $aca;
    $htunset = 60000 * $aca;
    $myay = 60000 * $aca;
    $say = 200000 * $aca;
    $alote = $price * 30;
    $ahtwe = 250000 * $aca;
    $revenue = 1250000 * $aca;
    $kone = $myosae + $htunset + $myay + $say + $alote + $ahtwe;
    $profit = $revenue - $kone;
    echo "<div class='container'>
        <img src='Close-36.png' class='close' />
        <h1>ခန့်မှန်းကုန်ကျစရိတ်/အမြတ်ငွေတွက်ချက်မှု</h1>
        <p>မျိုးစေ့ကုန်ကျစရိတ်:$myosae</p>
        <p>ထွန်စက်မောင်းခ:$htunset</p>
        <p>မြေညှိခ:$myay</p>
        <p>ဆေးအမျိုးမျိုးကုန်ကျစရိတ်:$say</p>
        <p>အလုပ်သမားခ:$alote</p>
        <p>ခန့်မှန်းအထွေထွေကုန်ကျစရိတ်:$ahtwe</p>
        <p>ခန့်မှန်းစုစုပေါင်းကုန်ကျစရိတ်:$kone</p>
        <p>$aca ဧကပျမ်းမျှအထွက်နှုန်းခန့်မှန်း၀င်ငွေ:$revenue</p>
        <p>ခန့်မှန်းအမြတ်ငွေ:$profit</p>
            
    </div>";
} elseif ($pel == 'ဘိုကိတ်ပဲ') {

    $sql = "SELECT * FROM pelprice WHERE item='bocate'";
    $query = mysqli_query($con, $sql);
    while ($a = mysqli_fetch_assoc($query)) {
        $pelprice = $a['price'];
        // code...
    }
    $myosae = $pelprice * $aca;
    $htunset = 60000 * $aca;
    $myay = 60000 * $aca;
    $say = 300000 * $aca;
    $alote = $price * 30;
    $ahtwe = 300000 * $aca;
    $revenue = 1200000 * $aca;
    $kone = $myosae + $htunset + $myay + $say + $alote + $ahtwe;
    $profit = $revenue - $kone;
    echo "<div class='container'>
        <img src='Close-36.png' class='close' />
        <h1>ခန့်မှန်းကုန်ကျစရိတ်/အမြတ်ငွေတွက်ချက်မှု</h1>
        <p>မျိုးစေ့ကုန်ကျစရိတ်:$myosae</p>
        <p>ထွန်စက်မောင်းခ:$htunset</p>
        <p>မြေညှိခ:$myay</p>
        <p>ဆေးအမျိုးမျိုးကုန်ကျစရိတ်:$say</p>
        <p>အလုပ်သမားခ:$alote</p>
        <p>ခန့်မှန်းအထွေထွေကုန်ကျစရိတ်:$ahtwe</p>
        <p>ခန့်မှန်းစုစုပေါင်းကုန်ကျစရိတ်:$kone</p>
        <p>$aca ဧကပျမ်းမျှအထွက်နှုန်းခန့်မှန်း၀င်ငွေ:$revenue</p>
        <p>ခန့်မှန်းအမြတ်ငွေ:$profit</p>
            
    </div>";
} elseif ($pel == 'စားတော်ပဲ') {

    $sql = "SELECT * FROM pelprice WHERE item='satawpal'";
    $query = mysqli_query($con, $sql);
    while ($a = mysqli_fetch_assoc($query)) {
        $pelprice = $a['price'];
        // code...
    }
    $myosae = $pelprice * $aca;
    $htunset = 60000 * $aca;
    $myay = 60000 * $aca;
    $say = 400000 * $aca;
    $alote = $price * 30;
    $ahtwe = 300000 * $aca;
    $revenue = 1520000 * $aca;
    $kone = $myosae + $htunset + $myay + $say + $alote + $ahtwe;
    $profit = $revenue - $kone;
    echo "<div class='container'>
        <img src='Close-36.png' class='close' />
        <h1>ခန့်မှန်းကုန်ကျစရိတ်/အမြတ်ငွေတွက်ချက်မှု</h1>
        <p>မျိုးစေ့ကုန်ကျစရိတ်:$myosae</p>
        <p>ထွန်စက်မောင်းခ:$htunset</p>
        <p>မြေညှိခ:$myay</p>
        <p>ဆေးအမျိုးမျိုးကုန်ကျစရိတ်:$say</p>
        <p>အလုပ်သမားခ:$alote</p>
        <p>ခန့်မှန်းအထွေထွေကုန်ကျစရိတ်:$ahtwe</p>
        <p>ခန့်မှန်းစုစုပေါင်းကုန်ကျစရိတ်:$kone</p>
        <p>$aca ဧကပျမ်းမျှအထွက်နှုန်းခန့်မှန်း၀င်ငွေ:$revenue</p>
        <p>ခန့်မှန်းအမြတ်ငွေ:$profit</p>
            
    </div>";
} elseif ($pel == 'ပဲစင်းငုံ') {

    $sql = "SELECT * FROM pelprice WHERE item='pelsinngon'";
    $query = mysqli_query($con, $sql);
    while ($a = mysqli_fetch_assoc($query)) {
        $pelprice = $a['price'];
        // code...
    }
    $myosae = $pelprice * $aca;
    $htunset = 60000 * $aca;
    $myay = 60000 * $aca;
    $say = 350000 * $aca;
    $alote = $price * 30;
    $ahtwe = 400000 * $aca;
    $revenue = 1980000 * $aca;
    $kone = $myosae + $htunset + $myay + $say + $alote + $ahtwe;
    $profit = $revenue - $kone;
    echo "<div class='container'>
        <img src='Close-36.png' class='close' />
        <h1>ခန့်မှန်းကုန်ကျစရိတ်/အမြတ်ငွေတွက်ချက်မှု</h1>
        <p>မျိုးစေ့ကုန်ကျစရိတ်:$myosae</p>
        <p>ထွန်စက်မောင်းခ:$htunset</p>
        <p>မြေညှိခ:$myay</p>
        <p>ဆေးအမျိုးမျိုးကုန်ကျစရိတ်:$say</p>
        <p>အလုပ်သမားခ:$alote</p>
        <p>ခန့်မှန်းအထွေထွေကုန်ကျစရိတ်:$ahtwe</p>
        <p>ခန့်မှန်းစုစုပေါင်းကုန်ကျစရိတ်:$kone</p>
        <p>$aca ဧကပျမ်းမျှအထွက်နှုန်းခန့်မှန်း၀င်ငွေ:$revenue</p>
        <p>ခန့်မှန်းအမြတ်ငွေ:$profit</p>
            
    </div>";
} elseif ($pel == 'ပဲထောပတ်') {

    $sql = "SELECT * FROM pelprice WHERE item='palhtawpat'";
    $query = mysqli_query($con, $sql);
    while ($a = mysqli_fetch_assoc($query)) {
        $pelprice = $a['price'];
        // code...
    }
    $myosae = $pelprice * $aca;
    $htunset = 60000 * $aca;
    $myay = 60000 * $aca;
    $say = 400000 * $aca;
    $alote = $price * 30;
    $ahtwe = 400000 * $aca;
    $revenue = 2080000 * $aca;
    $kone = $myosae + $htunset + $myay + $say + $alote + $ahtwe;
    $profit = $revenue - $kone;
    echo "<div class='container'>
        <img src='Close-36.png' class='close' />
        <h1>ခန့်မှန်းကုန်ကျစရိတ်/အမြတ်ငွေတွက်ချက်မှု</h1>
        <p>မျိုးစေ့ကုန်ကျစရိတ်:$myosae</p>
        <p>ထွန်စက်မောင်းခ:$htunset</p>
        <p>မြေညှိခ:$myay</p>
        <p>ဆေးအမျိုးမျိုးကုန်ကျစရိတ်:$say</p>
        <p>အလုပ်သမားခ:$alote</p>
        <p>ခန့်မှန်းအထွေထွေကုန်ကျစရိတ်:$ahtwe</p>
        <p>ခန့်မှန်းစုစုပေါင်းကုန်ကျစရိတ်:$kone</p>
        <p>$aca ဧကပျမ်းမျှအထွက်နှုန်းခန့်မှန်း၀င်ငွေ:$revenue</p>
        <p>ခန့်မှန်းအမြတ်ငွေ:$profit</p>
            
    </div>";
} elseif ($pel == 'ပဲကြီး') {

    $sql = "SELECT * FROM pelprice WHERE item='palkyi'";
    $query = mysqli_query($con, $sql);
    while ($a = mysqli_fetch_assoc($query)) {
        $pelprice = $a['price'];
        // code...
    }
    $myosae = $pelprice * $aca;
    $htunset = 60000 * $aca;
    $myay = 60000 * $aca;
    $say = 350000 * $aca;
    $alote = $price * 30;
    $ahtwe = 400000 * $aca;
    $revenue = 1740000 * $aca;
    $kone = $myosae + $htunset + $myay + $say + $alote + $ahtwe;
    $profit = $revenue - $kone;
    echo "<div class='container'>
        <img src='Close-36.png' class='close' />
        <h1>ခန့်မှန်းကုန်ကျစရိတ်/အမြတ်ငွေတွက်ချက်မှု</h1>
        <p>မျိုးစေ့ကုန်ကျစရိတ်:$myosae</p>
        <p>ထွန်စက်မောင်းခ:$htunset</p>
        <p>မြေညှိခ:$myay</p>
        <p>ဆေးအမျိုးမျိုးကုန်ကျစရိတ်:$say</p>
        <p>အလုပ်သမားခ:$alote</p>
        <p>ခန့်မှန်းအထွေထွေကုန်ကျစရိတ်:$ahtwe</p>
        <p>ခန့်မှန်းစုစုပေါင်းကုန်ကျစရိတ်:$kone</p>
        <p>$aca ဧကပျမ်းမျှအထွက်နှုန်းခန့်မှန်း၀င်ငွေ:$revenue</p>
        <p>ခန့်မှန်းအမြတ်ငွေ:$profit</p>
            
    </div>";
} elseif ($pel == 'ကုလားပဲ') {

    $sql = "SELECT * FROM pelprice WHERE item='kalapal'";
    $query = mysqli_query($con, $sql);
    while ($a = mysqli_fetch_assoc($query)) {
        $pelprice = $a['price'];
        // code...
    }
    $myosae = $pelprice * $aca;
    $htunset = 60000 * $aca;
    $myay = 60000 * $aca;
    $say = 350000 * $aca;
    $alote = $price * 30;
    $ahtwe = 350000 * $aca;
    $revenue = 1504000 * $aca;
    $kone = $myosae + $htunset + $myay + $say + $alote + $ahtwe;
    $profit = $revenue - $kone;
    echo "<div class='container'>
        <img src='Close-36.png' class='close' />
        <h1>ခန့်မှန်းကုန်ကျစရိတ်/အမြတ်ငွေတွက်ချက်မှု</h1>
        <p>မျိုးစေ့ကုန်ကျစရိတ်:$myosae</p>
        <p>ထွန်စက်မောင်းခ:$htunset</p>
        <p>မြေညှိခ:$myay</p>
        <p>ဆေးအမျိုးမျိုးကုန်ကျစရိတ်:$say</p>
        <p>အလုပ်သမားခ:$alote</p>
        <p>ခန့်မှန်းအထွေထွေကုန်ကျစရိတ်:$ahtwe</p>
        <p>ခန့်မှန်းစုစုပေါင်းကုန်ကျစရိတ်:$kone</p>
        <p>$aca ဧကပျမ်းမျှအထွက်နှုန်းခန့်မှန်း၀င်ငွေ:$revenue</p>
        <p>ခန့်မှန်းအမြတ်ငွေ:$profit</p>
            
    </div>";
} elseif ($pel == 'ပဲပုပ်') {

    $sql = "SELECT * FROM pelprice WHERE item='palpote'";
    $query = mysqli_query($con, $sql);
    while ($a = mysqli_fetch_assoc($query)) {
        $pelprice = $a['price'];
        // code...
    }
    $myosae = $pelprice * $aca;
    $htunset = 60000 * $aca;
    $myay = 60000 * $aca;
    $say = 80000 * $aca;
    $alote = $price * 30;
    $ahtwe = 200000 * $aca;
    $revenue = 880000 * $aca;
    $kone = $myosae + $htunset + $myay + $say + $alote + $ahtwe;
    $profit = $revenue - $kone;
    echo "<div class='container'>
        <img src='Close-36.png' class='close' />
        <h1>ခန့်မှန်းကုန်ကျစရိတ်/အမြတ်ငွေတွက်ချက်မှု</h1>
        <p>မျိုးစေ့ကုန်ကျစရိတ်:$myosae</p>
        <p>ထွန်စက်မောင်းခ:$htunset</p>
        <p>မြေညှိခ:$myay</p>
        <p>ဆေးအမျိုးမျိုးကုန်ကျစရိတ်:$say</p>
        <p>အလုပ်သမားခ:$alote</p>
        <p>ခန့်မှန်းအထွေထွေကုန်ကျစရိတ်:$ahtwe</p>
        <p>ခန့်မှန်းစုစုပေါင်းကုန်ကျစရိတ်:$kone</p>
        <p>$aca ဧကပျမ်းမျှအထွက်နှုန်းခန့်မှန်း၀င်ငွေ:$revenue</p>
        <p>ခန့်မှန်းအမြတ်ငွေ:$profit</p>
            
    </div>";
} elseif ($pel == 'ပဲတီစိမ်း') {

    $sql = "SELECT * FROM pelprice WHERE item='pelti'";
    $query = mysqli_query($con, $sql);
    while ($a = mysqli_fetch_assoc($query)) {
        $pelprice = $a['price'];
        // code...
    }
    $myosae = $pelprice * $aca;
    $htunset = 60000 * $aca;
    $myay = 60000 * $aca;
    $say = 200000 * $aca;
    $alote = $price * 30;
    $ahtwe = 250000 * $aca;
    $revenue = 1248000 * $aca;
    $kone = $myosae + $htunset + $myay + $say + $alote + $ahtwe;
    $profit = $revenue - $kone;
    echo "<div class='container'>
        <img src='Close-36.png' class='close' />
        <h1>ခန့်မှန်းကုန်ကျစရိတ်/အမြတ်ငွေတွက်ချက်မှု</h1>
        <p>မျိုးစေ့ကုန်ကျစရိတ်:$myosae</p>
        <p>ထွန်စက်မောင်းခ:$htunset</p>
        <p>မြေညှိခ:$myay</p>
        <p>ဆေးအမျိုးမျိုးကုန်ကျစရိတ်:$say</p>
        <p>အလုပ်သမားခ:$alote</p>
        <p>ခန့်မှန်းအထွေထွေကုန်ကျစရိတ်:$ahtwe</p>
        <p>ခန့်မှန်းစုစုပေါင်းကုန်ကျစရိတ်:$kone</p>
        <p>$aca ဧကပျမ်းမျှအထွက်နှုန်းခန့်မှန်း၀င်ငွေ:$revenue</p>
        <p>ခန့်မှန်းအမြတ်ငွေ:$profit</p>
            
    </div>";
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popup Page</title>
    <!-- css File -->
    <link rel="stylesheet" type="text/css" href="style29.css" />
</head>

<body>




    <!-- Js File -->
    <script src="sixth.js"></script>
</body>

</html>