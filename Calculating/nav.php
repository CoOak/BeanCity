<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="node_modules/wow.js/css/libs/animate.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Cinzel+Decorative:wght@700;900&family=Noto+Sans+Myanmar:wght@100;200;300;400;500;600;700;800;900&family=Orbitron:wght@600;700;800&family=Roboto+Slab:wght@300;400;500;600;700&family=Rokkitt:wght@300;400&display=swap" rel="stylesheet">

</head>
<style>
    .noto-sans myanmar-thin {
        font-family: "Noto Sans Myanmar", sans-serif;
        font-weight: 100;
        font-style: normal;
    }

    .noto-sans myanmar-extralight {
        font-family: "Noto Sans Myanmar", sans-serif;
        font-weight: 200;
        font-style: normal;
    }

    .noto-sans myanmar-light {
        font-family: "Noto Sans Myanmar", sans-serif;
        font-weight: 300;
        font-style: normal;
    }

    .noto-sans myanmar-regular {
        font-family: "Noto Sans Myanmar", sans-serif;
        font-weight: 400;
        font-style: normal;
    }

    .noto-sans myanmar-medium {
        font-family: "Noto Sans Myanmar", sans-serif;
        font-weight: 500;
        font-style: normal;
    }

    .noto-sans myanmar-semibold {
        font-family: "Noto Sans Myanmar", sans-serif;
        font-weight: 600;
        font-style: normal;
    }

    .noto-sans myanmar-bold {
        font-family: "Noto Sans Myanmar", sans-serif;
        font-weight: 700;
        font-style: normal;
    }

    .noto-sans myanmar-extrabold {
        font-family: "Noto Sans Myanmar", sans-serif;
        font-weight: 800;
        font-style: normal;
    }

    .noto-sans myanmar-black {
        font-family: "Noto Sans Myanmar", sans-serif;
        font-weight: 900;
        font-style: normal;
    }

    .nav-link {
        color: #fff !important;
        font-family: "Noto Sans Myanmar", sans-serif !important;
        font-style: normal;
        font-weight: 400 !important;
        font-size: 17px !important;
    }

    .dropdown:hover .dropdown-menu {
        display: block !important;
        margin-top: 1px !important;
        opacity: 1;
        /* Ensure the menu is fully visible */
        transition: opacity 2s ease !important;
    }
</style>

<body>


    <div class="">

        <nav class="navbar navbar-expand-lg nav-bar fixed-top shadow-lg mb-5">
            <div class="container">
                <a class="navbar-brand d-flex" href="main.php">
                    <img src="img/logo.png" class="logo" alt="" />
                    <span class="brand_name mt-2 ms-2">Bean City</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="#">ကျွန်ုပ်တို့အကြောင်း</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                ပဲအမျိုးအစားများ
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="mattpal.php">မတ်ပဲ</a></li>
                                <li><a class="dropdown-item" href="GroundNut.php">မြေပဲ</a></li>
                                <li><a class="dropdown-item" href="bocate.php">ဘိုကိတ်</a></li>
                                <li><a class="dropdown-item" href="satawpal.php">စားတော်ပဲ</a></li>
                                <li><a class="dropdown-item" href="pal.php">ပဲစင်းငုံ</a></li>
                                <li><a class="dropdown-item" href="palhtawpat.php">ပဲထောပတ်</a></li>
                                <li><a class="dropdown-item" href="pelkyi.php">ပဲကြီး</a></li>
                                <li><a class="dropdown-item" href="kalapal.php">ကုလားပဲ</a></li>
                                <li><a class="dropdown-item" href="pelpote.php">ပဲပုပ်</a></li>
                                <li><a class="dropdown-item" href="palti.php">ပဲတီစိမ်း</a></li>
                                <li>

                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" onclick="Click()" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                စျေးနှုန်းများ
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="price.php">ယနေ့ပဲဈေးနှုန်းများ</a></li>
                                <li><a class="dropdown-item" href="Calculating/option.php">ခန့်မှန်းကုန်ကျငွေ တွက်ရန်</a></li>
                                <li>
                                    <?php


                                    if (isset($_SESSION['name'])) {
                                        echo '<a class="dropdown-item" href="comment_1.php">အမေးအဖြေ</a>';
                                    } else {
                                        echo '<a class="dropdown-item" onclick="showSweetAlert()">အမေးအဖြေ</a>';
                                    } ?>



                            </ul>
                        </li>






                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                ရောဂါပိုးမွှားနှင့်ဆေးများ
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="#">ကျရောက်နိုင်သောရောဂါပိုမွှားများ</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li><a class="dropdown-item" href="poethatsay.php">ဆေးများ</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">





                        <?php


                        if (isset($_SESSION['name'])) {
                            echo '<div class="dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' . $_SESSION['name'] . '
                
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="LogoutServlet.php">Logout</a>
              </div>
            </div>';
                        } else {
                            echo '



                            <a class="nav-link " aria-current="page" href="Login.php">အကောင့်၀င်ရန်</a>
                  


              

            ';
                        }


                        ?>
                    </form>
                </div>
            </div>
        </nav>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function showSweetAlert() {
            Swal.fire({
                title: 'အကောင့်မရှိသေးပါသဖြင့်အကောင့်ပြုလုပ်ရန်လိုအပ်ပါသည်။',
                text: 'အကောင့်ပြုလုပ်လိုပါသလား?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: "မပြုလုပ်တော့ပါ",
                confirmButtonText: 'ပြုလုပ်မည်',
                customClass: {
                    // Define a CSS class for the alert
                    title: 'title-class',
                    text: 'text-class',
                    actions: 'actions-class'
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    // User clicked "Yes, proceed!" button
                    window.location.href = 'Login1.php'; // Replace with your desired page URL
                }
            });
        }
    </script>

    <style>
        /* Define CSS classes for custom styling */
        .title-class {
            font-size: 20px;
            margin-top: 10px;
            /* Adjust font size as needed */
        }

        .text-class {
            font-size: 18px;
        }
    </style>