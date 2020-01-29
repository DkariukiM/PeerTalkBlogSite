<?php include("path.php");?>
<?php include(ROOT_PATH. '/app/controllers/posts.php');

if (isset($_GET['id']))
{
    $post = selectOne('posts', ['id' => $_GET['id']]);

}
$topics = selectAll('topics');
$posts = selectAll('posts', ['published' => 1]);

?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title> <?php echo $post['title']; ?> || PeerTalk </title>
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

<!--Page wrapper-->
<div class="page-wrapper">

    <!--content section-->
    <div class="content clearfix">
        <!--recent post section-->
        <div class="main-content-wrapper">
        <div class="main-content single">
            <h1 class="post-title"style="text-align: center;margin-bottom: 40px;"><?php echo $post['title']; ?></h1>

            <div class="post-content">
                <?php echo html_entity_decode($post['body']); ?>
            </div>
        </div>
        </div>
        <!--end of main content posts-->

        <!--side bar-->
        <div class="sidebar single">
            <div class="section popular">
                <h2 class="section-title">Popular</h2>

                <?php foreach ($posts as $p): ?>
                    <div class="post clearfix">
                        <img src="<?php echo BASE_URL . '/assets/img/' . $p['image']; ?>" alt="Peer Talk Blog">
                        <a href="cry.html" class="title">
                            <h4><?php echo $p['title']; ?></h4>
                        </a>
                    </div>
                <?php endforeach; ?>



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
</body>
</html>