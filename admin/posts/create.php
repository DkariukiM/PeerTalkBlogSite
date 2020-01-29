<?php include ('../../path.php'); ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php");

adminOnly();

?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Admin Section || Add Posts </title>
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
            <a href="create.php" class="btn btn-big">Add Post</a>
            <a href="index.php" class="btn btn-big">Manage Post</a>
        </div>

        <div class="content">
            <h2 class="page-title"> Add Post </h2>
            <?php include (ROOT_PATH . "/app/helpers/formErrors.php")?>
            <!--content table-->
           <form action="create.php" method="post" enctype="multipart/form-data">
               <div style="margin-bottom: 20px;">
                   <label>Title: </label>
                   <input type="text" name="title" value="<?php echo $title; ?>" class="text-input">
               </div>

               <div style="margin-bottom: 20px;">
                   <label>Body: </label>
                   <textarea name="body" id="body"> <?php echo $body; ?> </textarea>
               </div>
               <div>
                   <label> Image :</label>
                   <input type="file" name="image" class="text-input">
               </div>

               <div style="margin-bottom: 20px;">
                   <label>Topic :</label>
                   <select name="topic_id" class="text-input">
                       <option value=""></option>

                    <?php foreach ($topics as $key => $topic): ?>
                    <?php if (!empty($topic_id && $topic_id == $topic['id'])): ?>
                       <option selected value=" <?php echo $topic['id'] ?>"> <?php echo $topic['name'] ?> </option>

                       <?php else: ?>
                       <option value=" <?php echo $topic['id'] ?>"> <?php echo $topic['name'] ?> </option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                   </select>
               </div>

               <div>
                   <?php if (empty($published)): ?>
                       <label>
                           <input type="checkbox" name="published"> Publish
                       </label>
                   <?php else: ?>
                       <label>
                           <input type="checkbox" name="published" checked> Publish
                       </label>
                   <?php endif; ?>

               </div>

               <div style="margin-bottom: 20px;">
                   <button type="submit" name="add-post" class="btn btn-big"> Add Post </button>
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