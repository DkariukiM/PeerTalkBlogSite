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
    <title> Admin Section || Manage Users </title>
    <link rel="shortcut icon" type="image/png" href="../../assets/img/peerTalk.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <!--custom styling-->
    <link rel="stylesheet" href="../../assets/css/main.css">
    <link rel="stylesheet" href="../../assets/css/loader.css">
    <!--admin style-->
    <link rel="stylesheet" href="../../assets/css/admin.css">
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
            <a href="index.php" class="btn btn-big">Manage Users</a>
        </div>

        <div class="content">
            <h2 class="page-title"> Manage Users </h2>

            <?php require (ROOT_PATH . "/app/includes/messages.php"); ?>
            <!--content table-->
            <table>
                <thead>
                <th>SN</th>
                <th>Username</th>
                <th> Email </th>
                <th colspan="3">Action</th>
                </thead>
                <tbody>
                <?php foreach ($admin_users as $key => $user): ?>
                <tr>
                    <td> <?php echo $key + 1; ?> </td>
                    <td> <?php echo $user['username'];?> </td>
                    <td> <?php echo $user['email']; ?> </td>
                    <td><a href="edit.php?id=<?php echo $user['id']; ?>" class="edit">edit</a></td>
                    <td><a href="index.php?delete_id=<?php echo $user['id']; ?>" class="delete">delete</a></td>
                </tr>

                <?php endforeach; ?>

                </tbody>
            </table>

            <!--end of content table-->

        </div>

    </div>
    <!--end of admin content-->
</div>
<!--ent of page wrapper-->
<!--jquery-->
<script src="../../assets/js/jquery-3.4.1.js"></script>
<!--main jquery-->
<script src="../../assets/js/main.js"></script>
<?php /*require 'footer.php' */?>
</body>
</html>