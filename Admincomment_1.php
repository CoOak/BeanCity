<?php
//index.php

?>
<!DOCTYPE html>
<html>

<head>
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <link rel="stylesheet" href="Admincomment.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Adminstyle.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
    .sidebar li a .links_name {
        color: #fff;
        font-size: 15px;
        font-weight: 400;
        padding: 10px;

        white-space: nowrap;
        opacity: 0;
        pointer-events: none;
        transition: 0.4s;
    }

    .sidebar {
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

    .messageInput {
        width: 100%;

        height: 100%;
        font-size: 16px;

        outline: none;
        border: none;
        padding-left: 30px;
        text-align: start;

        color: #000000;
    }

    .messageBox {
        width: 80%;
        height: 60px;
        display: flex;
        margin-left: 180px;
        align-items: center;
        justify-content: space-between;
        background-color: #fdfdfd;
        padding: 0 15px;
        border-radius: 10px;
        border: 1px solid rgb(197, 197, 197);
    }
</style>


<body>
    <div class="sidebar">
        <div class="logo-details">

            <a href="main.php" class=" text-decoration-none logo_name text-center w-100">Bean City</a>
            <i class='bx bx-menu' id="btn"></i>
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

                <a href="AdminLogin.php" class=" w-100 links_name text-center ps-3">Log Out <i class='bx bx-log-out' id="log_out"></i></a>


            </li>
        </ul>
    </div>
    <section class="ps-5 home-section">
        <div class="container pt-5">


            <div class="container topHeight">

                <div class="show">
                    <div id="display_comment"></div>
                    <br>
                    <span id="comment_message"></span>
                    <br />
                </div>

                <div class="form">
                    <div class="form-container">
                        <form action="" method="POST" id="comment_form">

                            <div class="messageBox">
                                <div class="fileUploadWrapper">
                                    <label for="file">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 337 337">
                                            <circle stroke-width="20" stroke="#6c6c6c" fill="none" r="158.5" cy="168.5" cx="168.5"></circle>
                                            <path stroke-linecap="round" stroke-width="25" stroke="#6c6c6c" d="M167.759 79V259"></path>
                                            <path stroke-linecap="round" stroke-width="25" stroke="#6c6c6c" d="M79 167.138H259"></path>
                                        </svg>
                                        <span class="tooltip">Add an image</span>
                                    </label>
                                    <input type="file" id="file" name="file" />
                                </div>

                                <input required="" name="comment_content" placeholder="Message..." type="text" class="messageInput" id=" comment_content" />
                                <input type="hidden" name="comment_id" id="comment_id" value="0" />

                                <button class="sendButton" type="submit" name="submit" id="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 664 663">
                                        <path fill="none" d="M646.293 331.888L17.7538 17.6187L155.245 331.888M646.293 331.888L17.753 646.157L155.245 331.888M646.293 331.888L318.735 330.228L155.245 331.888"></path>
                                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="33.67" stroke="#6c6c6c" d="M646.293 331.888L17.7538 17.6187L155.245 331.888M646.293 331.888L17.753 646.157L155.245 331.888M646.293 331.888L318.735 330.228L155.245 331.888"></path>
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <script src="script.js"></script>
</body>

</html>

<script>
    $(document).ready(function() {

        $('#comment_form').on('submit', function(event) {
            event.preventDefault();
            var form_data = $(this).serialize();
            $.ajax({
                url: "Adminadd_comment.php",
                method: "POST",
                data: form_data,
                dataType: "JSON",
                success: function(data) {
                    if (data.error != '') {
                        $('#comment_form')[0].reset();
                        $('#comment_message').html(data.error);
                        $('#comment_id').val('0');
                        load_comment();
                    }
                }
            })
        });

        load_comment();

        function load_comment() {
            $.ajax({
                url: "Adminfetch_comment.php",
                method: "POST",
                success: function(data) {
                    $('#display_comment').html(data);
                }
            })
        }

        $(document).on('click', '.reply', function() {
            var comment_id = $(this).attr("id");
            $('#comment_id').val(comment_id);
            $('.messageInput').focus();
        });

    });
</script>