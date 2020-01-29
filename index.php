<?php include("path.php");?>
<?php include (ROOT_PATH . '/app/controllers/topics.php');
$posts = '';
$postsTitle = 'Recent Posts';
if (isset($_GET['t_id']))
{
    $postsTitle = "You Searched For posts under '" . $_GET['name'] . "'";
    $posts = getPostsByTopicId($_GET['t_id']);
}
elseif (isset($_POST['search-term']))
{
    $postsTitle = "You Searched For '" . $_POST['search-term'] . "'";
    $posts=searchPosts($_POST['search-term']);
}else
{
    $posts = getPublishedPosts();

}





?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Home || Welcome </title>
    <link rel="shortcut icon" type="image/png" href="assets/img/peerTalk.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <!--custom styling-->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/loader.css">

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
    <script src="assets/js/jquery-3.4.1.js"></script>
    <script>
        $(window).on("load",function(){
            $(".loader-wrapper").fadeOut("slow")
        });

    </script>
</div>
<main>
    <!--nav bar section-->
<?php require (ROOT_PATH . "/app/includes/header.php"); ?>
    <?php require (ROOT_PATH . "/app/includes/messages.php"); ?>




    <!--Page wrapper-->
<div class="page-wrapper">
    <!--Horizontal Carousel-->
        <div class="post-slider">
            <h1 class="slider-title"> Trending Posts </h1>
                <i class="fa fa-chevron-left prev"></i>
            <i class="fa fa-chevron-right next"></i>

            <div class="post-wrapper">
                <?php foreach ($posts as $key => $post): ?>
                    <div class="post">
                        <img src="<?php echo BASE_URL . "/assets/img/" . $post['image']; ?>" alt="Binge Eating" class="slider-image">
                        <div class="post-info">
                            <h4><a href="single.php?id=<?php echo $post['id']; ?>"> <?php echo $post['title']; ?> </a></h4>
                            <i class="fa fa-user"> <?php echo $post['username']; ?></i>
                            &nbsp;
                            <i class="fa fa-calendar"><?php echo date('F j, Y.', strtotime($post['created_at'])); ?></i>
                        </div>
                    </div>
                <?php endforeach; ?>


            </div>
        </div>
    <!--end of post slider-->


    <!--content section-->
    <div class="content clearfix">
            <!--recent post section-->
        <div class="main-content">
            <h1 class="recent-post-title"> <?php echo $postsTitle; ?> </h1>
            <?php foreach ($posts as $key => $post): ?>
                <div class="post clearfix">
                    <img src="<?php echo BASE_URL . "/assets/img/" . $post['image']; ?>" alt="binge eating" class="post-image">
                    <div class=" post-preview">
                        <h2><a href="single.php?id=<?php echo $post['id']; ?>">  <?php echo $post['title']; ?> </a></h2>
                        <i class="fa fa-user"><?php echo $post['username']; ?></i>
                        &nbsp;
                        <i class="fa fa-calendar"> <?php echo date('F j, Y.', strtotime($post['created_at'])); ?> </i>
                        <p class="preview-text">
                  <?php echo html_entity_decode(substr($post['body'], 0,150) . '...') ?>
                        </p>
                        <a href="single.php?id=<?php echo $post['id']; ?>" class="btn read-more"> Read More</a>
                    </div>
                </div>
            <?php endforeach; ?>


        </div>
        <!--end of recent posts-->

        <!--side bar-->
        <div class="sidebar">
            <div class="section search">
                <h2 class="section-title">Search</h2>
                <form action="index.php" method="post">
                    <input type="text" name="search-term" class="text-input" placeholder="Search....">
                </form>
            </div>

            <div class="section topic">
                <h2 class="section-title"> Topics</h2>

                <ul>
                    <?php foreach ($topics as $key => $topic ): ?>
                        <li> <a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name']; ?>"><?php echo $topic['name']; ?> </a></li>
                    <?php endforeach; ?>

                </ul>
            </div>
        </div>
        <!--end of side bar-->

    </div>
    <!--end of content section-->
</div>
<!--ent of page wrapper-->
<!--jquery-->
<script src="assets/js/jquery-3.4.1.js"></script>
<!--slick carousel-->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<!--main jquery-->
<script src="assets/js/main.js"></script>
<script>
    $(document).ready(function () {
        $('.post-wrapper').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            nextArrow: $('.next'),
            prevArrow: $('.prev'),
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    });
</script>
<?php require (ROOT_PATH . "/app/includes/footer.php"); ?>
</main>
</body>
</html>