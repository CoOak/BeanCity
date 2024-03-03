<!DOCTYPE html>
<html lang="en">

<head>
    <title>Upload Excel(CSV) file with PHP - CodingBirdsOnline.com</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="node_modules/wow.js/css/libs/animate.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="https://codingbirdsonline.com/wp-content/uploads/2019/12/cropped-coding-birds-favicon-2-1-192x192.png" type="image/x-icon">
    <style>
        input[type=text],
        select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        input[type=reset] {
            width: 100%;
            background-color: red;
            color: white;
            padding: 10px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=reset]:hover {
            background-color: red;
        }

        #box {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
            margin: 0px 200px 0px 200px;
        }

        .btn {
            position: relative;
            font-size: 17px;
            text-transform: uppercase;
            text-decoration: none;
            padding: 1em 2.5em;
            display: inline-block;
            border-radius: 6em;
            transition: all .2s;
            border: none;
            font-family: inherit;
            font-weight: 500;
            color: black;
            background-color: white;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .btn:active {
            transform: translateY(-1px);
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }

        .btn::after {
            content: "";
            display: inline-block;
            height: 100%;
            width: 100%;
            border-radius: 100px;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
            transition: all .4s;
        }

        .btn::after {
            background-color: #fff;
        }

        .btn:hover::after {
            transform: scaleX(1.4) scaleY(1.6);
            opacity: 0;
        }
    </style>
</head>

<body>

    <?php
    include("nav.php");
    ?>




    <div class="jumbotron text-center topHeight">
        <h2>ကုန်ကျစရိတ် ခန့်မှန်းတွက်ချက်ရန်</h2>

    </div>
    <div id="box">
        <form action="calculate.php" method="POST">

            <label>ခရိုင်ရွေးချယ်ပါ <span style="color:black;">*</span></label>
            <select name="country" id="countryId" class="form-control" onchange="getStateByCountry();" required>

                <option selected value="">ခရိုင်ရွေးပါ</option>
                <option value="">ပုသိမ် ခရိုင်</option>
                <option value="">မြောင်းမြခရိုင်</option>
                <option value="">မြန်အောင်ခရိုင်</option>
                <option value="">ဖျာပုံခရိုင်</option>
                <option value="">ကျုံပျော်ခရိုင်</option>


            </select>
            <label>ပဲ အမျိုးအစား <span style="color:black;">*</span></label>
            <select name="kind" id="countryId" class="form-control" onchange="getStateByCountry();" required>
                <option selected>ပဲ အမျိုးအစား ရွေးပါ</option>
                <option name=" " value="မတ်ပဲ">မတ်ပဲ</option>
                <option name=" " value="ပဲတီစိမ်း">ပဲတီစိမ်း</option>
                <option name=" " value="မြေပဲ">မြေပဲ</option>
                <option name=" " value="ဘိုကိတ်ပဲ">ဘိုကိတ်ပဲ</option>
                <option name=" " value="စားတော်ပဲ">စားတော်ပဲ</option>
                <option name=" " value="ပဲစင်းငုံ">ပဲစင်းငုံ</option>
                <option name=" " value="ပဲထောပတ်">ပဲထောပတ်</option>
                <option name=" " value="ပဲကြီး">ပဲကြီး</option>
                <option name=" " value="ကုလားပဲ">ကုလားပဲ</option>
                <option name=" " value="ပဲပုပ်">ပဲပုပ်</option>

            </select>

            <label>ဧက <span style="color:black;">*</span></label>
            <input type="text" name="aca" class="form-control">

            <label>အလုပ်သမားခ<span style="color:black;">*</span></label>
            <input type="text" name="price" class="form-control">




            <input type="submit" value="တွက်မည်" class="btn">
            <input type="reset" value="ဖျက်မည်" class="btn">
        </form>
    </div>

</body>

</html>