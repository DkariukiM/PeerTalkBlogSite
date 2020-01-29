<?php include ("path.php");
$errors = array();
?>
<?php include(ROOT_PATH . "/app/controllers/users.php");
guestsOnly();
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Register || Login </title>
    <link rel="shortcut icon" type="image/png" href="assets/img/peerTalk.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <!--custom styling-->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/loader.css">

    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">

</head>
<body>
<div class="loader-wrapper">
    <ul class="loader">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
    <script src="assets/js/jquery-3.4.1.js"></script>
    <script>
        $(window).on("load",function(){
            $(".loader-wrapper").fadeOut("slow")
        });

    </script>
</div>

<!--nav bar section-->
<?php require (ROOT_PATH . "/app/includes/header.php"); ?>


<!--Register form-->
<div class="auth-content" >
    <div class="wrapper">
        <form action="register.php" method="post" class="form">
            <h2> Register </h2>
                <?php include (ROOT_PATH . "/app/helpers/formErrors.php")?>
            <div class="input-field" >
                <input type="text" name="username" value="<?php echo $username; ?>" class="input"  >
                <label>UserName</label>
            </div>
            <div class="input-field" >
                <input type="email" name="email" value="<?php echo $email; ?>" class="input"  >
                <label>Email</label>
            </div>
            <div class="input-field" >
                <input type="password" name="password" value="<?php echo $password; ?>" class="input"  >
                <label>Password</label>
            </div>
            <div class="input-field" >
                <input type="password" name="passwordConf" value="<?php echo $passwordConf; ?>" class="input"  >
                <label>Confirm Password</label>
            </div>
            <div style="margin-bottom: -30px;">
                <input type="submit" name="register-btn" value="Register" class="btn" >
            </div>
            <br>
            <p style="margin-bottom: -20px;"> Or <a href="login.php">Sign In </a></p>
</div>

<!--ent of page wrapper-->
<!--jquery-->
<script src="assets/js/jquery-3.4.1.js"></script>
<!--main jquery-->
<script src="assets/js/main.js"></script>
<?php /*require 'footer.php' */?>
</body>
</html>
