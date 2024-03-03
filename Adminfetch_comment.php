<style>
    .com{

    }
</style>
<?php


$refreshInterval = 1000; // For example, refresh every 60 seconds

// Send the HTTP Refresh header



//Adminfetch_comment.php
$connect = new PDO('mysql:host=localhost;port=3310;dbname=beanpj', 'root', '');

$query = "
SELECT * FROM tbl_comment 
WHERE parent_comment_id = '0' 
ORDER BY comment_id DESC
";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();
$output = '';
foreach ($result as $row) {
    date_default_timezone_set('Asia/Yangon');
    // Create DateTime objects for the current time and a past time (e.g., 1 hour ago)
    $now = new DateTime();
    $oneHourAgo = new DateTime($row["date"]);


    // Calculate the difference between the two DateTime objects
    $timeDifference = $now->diff($oneHourAgo);


    $hours = $timeDifference->h;
    $minutes = $timeDifference->i;
    $seconds = $timeDifference->s;

    if ($hours === 0) {
        // Show only minutes
        $timeDisplay = "{$minutes} minutes ";
    } else {
        // Show hours and minutes
        $timeDisplay = "{$hours} hours, {$minutes} minutes";
    }



    // Display the result
    // echo "1 hour ago: $hours hours, $minutes minutes, $seconds seconds ago";


    $output .= '



<div class=" ">
    <div class=" d-flex">
    <img width="55" height="55" src="https://img.icons8.com/bubbles/100/user.png" alt="user" />
        <h1 class=" fw-bold ms-2" style="
    padding-top: 15px;font-size:19px; 
">' . $row["comment_sender_name"] . '</h1>
        <p class="ms-3 " style="padding-top: 19px;font-size:13px">. &nbsp;&nbsp; ' . $timeDisplay . ' ago</p>
    </div>

    <p class="   com" style="padding-left: 62px;font-size:17px">
    ' . $row["comment"] . '
    </p>

    <button class="mt-1 reply fw-bold  mb-5" type="button"  id="' . $row["comment_id"] . ' "  style="padding-left: 63px; border:none; font-size:14px; color:#211C6A;">Reply</button>

        <a href="Admindeletecomment.php?id=' . $row["comment_id"] . '" class="fw-bold ms-3" style=" font-size:14px; color:#211C6A;text-decoration: none;">Delete</a>

</div>

 ';
    $output .= get_reply_comment($connect, $row["comment_id"]);
}


echo $output;
function get_reply_comment($connect, $parent_id = 0, $marginleft = 0)
{
    $query = "
 SELECT * FROM tbl_comment WHERE parent_comment_id = '" . $parent_id . "'
 ";
    $output = '';
    $statement = $connect->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    $count = $statement->rowCount();
    if ($parent_id == 0) {
        $marginleft = 0;
    } else {
        $marginleft = $marginleft + 55;
    }
    if ($count > 0) {
        foreach ($result as $row) {
            date_default_timezone_set('Asia/Yangon');
            // Create DateTime objects for the current time and a past time (e.g., 1 hour ago)
            $now = new DateTime();
            $oneHourAgo = new DateTime($row["date"]);


            // Calculate the difference between the two DateTime objects
            $timeDifference = $now->diff($oneHourAgo);


            $hours = $timeDifference->h;
            $minutes = $timeDifference->i;
            $seconds = $timeDifference->s;

            if ($hours === 0) {
                // Show only minutes
                $timeDisplay = "{$minutes} minutes ";
            } else {
                // Show hours and minutes
                $timeDisplay = "{$hours} hours, {$minutes} minutes";
            }

            $output .= '
            
   <div class="" style="margin-left:' . $marginleft . 'px">
   
<div class=" ">
    <div class=" d-flex">
    <img width="55" height="55" src="https://img.icons8.com/bubbles/100/user.png" alt="user" />
        <h2 class=" fw-bold ms-2" style="
    padding-top: 15px;font-size:19px; 
">' . $row["comment_sender_name"] . '</h2>
        <p class="ms-3 " style="padding-top: 19px;font-size:13px">. &nbsp;&nbsp; ' . $timeDisplay . ' ago</p>
    </div>

    <p class="com" style="padding-left: 62px;font-size:17px">
    ' . $row["comment"] . '
    </p>

    <button class="mt-1 reply fw-bold  mb-5" type="button"  id="' . $row["comment_id"] . ' "  style="padding-left: 63px; border:none; font-size:14px; color:#211C6A;">Reply</button>
    <a href="Admindeletecomment.php?id=' . $row["comment_id"] . '" class=" fw-bold ms-3" style=" font-size:14px; color:#211C6A;text-decoration: none;">Delete</a>
</div>

   </div>
   
   ';
            $output .= get_reply_comment($connect, $row["comment_id"], $marginleft);
        }
    }
    return $output;
}



?>
<script>
    // Refresh the page after 60 seconds
    setTimeout(function() {
        location.reload();
    }, 60000); // 60 seconds in milliseconds
</script>