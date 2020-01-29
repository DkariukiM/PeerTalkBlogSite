<?php include('../path.php');  ?>
<?php include(ROOT_PATH . "/app/controllers/topics.php");
adminOnly();

/*get total number of users*/
$sql = "SELECT * FROM users";
$result = mysqli_query($conn,$sql);
$number_of_users = mysqli_num_rows($result);

/*get total number of posts*/
$sql2 = "SELECT * FROM posts";
$result2 = mysqli_query($conn,$sql2);
$number_of_posts = mysqli_num_rows($result2);

/*get total number of topics in database*/
$sql3 = "SELECT * FROM topics";
$result3 = mysqli_query($conn,$sql3);
$number_of_topics = mysqli_num_rows($result3);



?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Admin Section || DashBoard </title>
    <link rel="shortcut icon" type="image/png" href="../assets/img/peerTalk.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <!--custom styling-->
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/loader.css">

    <!--admin style-->
    <link rel="stylesheet" href="../assets/css/admin.css">
    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">
    <!--counter js-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
    <!-- counter style-->
    <style>
        .middle
        {
            position: absolute;
            top: 50%;
            width: 60%;
            transform: translateY(-50%);
        }
        .counting-sec
        {
            padding: 40px 30px;
            width: 100%;
        }
        .inner-width
        {
            margin-left: 30px;
            max-width: 1200px;
            display: flex;
        }
        .col
        {
            flex: 1;
            text-align: center;
            padding: 20px;
        }
        .col i
        {
            font-size: 40px;
            color: #303036;
        }
        .num
        {
            color: #0e94a0;
            font-size: 40px;
            margin: 30px 0;
        }
    </style>

</head>
<body>
<!--<div class="loader-wrapper">
    <ul class="loader">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
    <script src="../assets/js/jquery-3.4.1.js"></script>
    <script>
        $(window).on("load",function(){
            $(".loader-wrapper").fadeOut("slow")
        });

    </script>
</div>-->

<!--nav bar section-->

<!--admin header code-->
<?php include (ROOT_PATH . "/app/includes/adminHeader.php");?>

<!--Admin Page wrapper-->
<div class="Admin-wrapper">

    <!--left side bar-->
    <?php include (ROOT_PATH . "/app/includes/adminSidebar.php");?>
    <!--end of left sidebar-->

    <!-- Admin Content-->
    <div class="admin-content">

        <div class="content">
            <h2 class="page-title"> DashBoard </h2>
            <?php include (ROOT_PATH . "/app/includes/messages.php")?>
            <!--Details Counter-->
            <div class="middle">
                <div class="counting-sec">
                    <div class="inner-width">
                        <div class="col">
                            <i class="far fa-smile-wink"></i>
                            <div class="num"><?php echo $number_of_users; ?> </div>
                            <h2>Users</h2>
                        </div>

                        <div class="col">
                            <i class="fa fa-print"></i>
                            <div class="num"><?php echo $number_of_posts;?> </div>
                            <h2>Posts</h2>
                        </div>

                        <div class="col">
                            <i class="fa fa-edit"></i>
                            <div class="num"><?php echo $number_of_topics;?></div>
                            <h2>Topics</h2>
                        </div>
                        <script type="text/javascript">
                            $(".num").counterUp({delay:10,time:1000});
                        </script>
                    </div>
                </div>
            </div>



        </div>

    </div>
    <!--end of admin content-->
</div>
<!--ent of page wrapper-->
<!--jquery-->
<script src="../assets/js/jquery-3.4.1.js"></script>
<!--main js-->
<script src="../assets/js/main.js"></script>
</body>
</html>