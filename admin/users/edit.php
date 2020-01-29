<?php
/**
 * Created by PhpStorm.
 * User: Hp
 * Date: 1/26/2020
 * Time: 11:19 AM
 */
?>
<?php include ('../../path.php'); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php");
adminOnly();

?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Admin Section || Edit Users </title>
    <link rel="shortcut icon" type="image/png" href="../../assets/img/peerTalk.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <!--custom styling-->
    <link rel="stylesheet" href="../../assets/css/main.css">
    <link rel="stylesheet" href="../../assets/css/loader.css">
    <!--admin style-->
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">
    <style>

    </style>
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
    <script src="../../assets/js/jquery-3.4.1.js"></script>
    <script>
        $(window).on("load",function(){
            $(".loader-wrapper").fadeOut("slow")
        });

    </script>
</div>

<!--nav bar section-->
<?php include (ROOT_PATH . "/app/includes/adminHeader.php");?>

<!--Admin Page wrapper-->
<div class="Admin-wrapper">

    <!--left side bar-->
    <div class="left-sidebar">
        <?php include (ROOT_PATH . "/app/includes/adminSidebar.php");?>

    </div>
    <!--end of left sidebar-->

    <!-- Admin Content-->
    <div class="admin-content">
        <div class="button-group">
            <a href="create.php" class="btn btn-big">Add User</a>
            <a href="index.php" class="btn btn-big">Manage User</a>
        </div>

        <div class="content">
            <h2 class="page-title"> Edit Admin </h2>
            <?php include (ROOT_PATH . "/app/helpers/formErrors.php")?>
            <!--content table-->
                <form action="edit.php" method="post">
                    <div style="margin-bottom: 20px;">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <label> Username: </label>
                        <input type="text" name="username" value="<?php echo $username; ?>" class="text-input">
                    </div>

                    <div style="margin-bottom: 20px;">
                        <label> Email: </label>
                        <input type="email" name="email" value="<?php echo $email; ?>" class="text-input">
                    </div>
                    <div style="margin-bottom: 20px;">
                        <label>password: </label>
                        <input type="password" name="password" class="text-input">
                    </div>
                    <div style="margin-bottom: 20px;">
                        <label> Retype password: </label>
                        <input type="password" name="passwordConf"  class="text-input">
                    </div>
                    <div style="margin-bottom: 20px;">
                        <label>
                            <?php if (isset($admin) && $admin == 1): ?>
                                <input type="checkbox" name="admin" checked> Admin
                            <?php else: ?>
                                <input type="checkbox" name="admin"> Admin
                            <?php endif; ?>
                        </label>
                    </div>
                    <div style="margin-bottom: 20px;">
                        <button type="submit" name="update-user" class="btn btn-big"> Update User </button>
                    </div>

                </form>

                <!--end of content table-->

        </div>

    </div>
    <!--end of admin content-->
</div>
<!--ent of page wrapper-->
<!--jquery-->
<script src="../../assets/js/jquery-3.4.1.js"></script>
<!--CKtext editor-->
<script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#body' ), {
            toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
            heading: {
                options: [
                    { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                    { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                    { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
                ]
            }
        } )
        .catch( error => {
            console.log( error );
        } );
</script>
<!--main js-->
<script src="../../assets/js/main.js"></script>
<?php /*require 'footer.php' */?>
</body>
</html>
