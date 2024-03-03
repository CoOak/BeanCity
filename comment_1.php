<?php
//index.php

?>
<!DOCTYPE html>
<html>

<head>
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <link rel="stylesheet" href="css/comment.css">
</head>
<style>
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
</style>


<body>

    <?php
    include("nav.php")
    ?>

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
</body>

</html>

<script>
    $(document).ready(function() {

        $('#comment_form').on('submit', function(event) {
            event.preventDefault();
            var form_data = $(this).serialize();
            $.ajax({
                url: "add_comment.php",
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
                url: "fetch_comment.php",
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