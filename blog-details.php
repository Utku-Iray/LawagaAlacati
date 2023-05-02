<?php

$URL = 'data/blog.json';
$JSON = file_get_contents($URL);
$blog_JSON = json_decode($JSON);

$selectedVal = array();

if (isset($_GET["name"])) {

    $name = $_GET['name'];
    for ($i = 0; $i < count($blog_JSON); $i++) {
        if ($blog_JSON[$i]->blog_title == $name) {

            array_push($selectedVal, $blog_JSON[$i]);
        }
    }
}
else {
    header("Location: index.php");
}

?>
<?php include 'php/head.php' ?>
<?php include 'php/header.php' ?>

<main>
    <!-- breadcrumb area start -->
    <section class="breadcrumb-area pt-140 pb-140 bg_img" data-background="assets/images/bg/1.jpeg" data-overlay="dark" data-opacity="5">
        <div class="shape shape__1"><img src="assets/images/shape/breadcrumb-shape-1.png" alt=""></div>
        <div class="shape shape__2"><img src="assets/images/shape/breadcrumb-shape-2.png" alt=""></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center">
                    <h2 class="page-title"><?= $selectedVal[0]->blog_title ?></h2>
                    <div class="cafena-breadcrumb breadcrumbs">
                        <ul class="list-unstyled d-flex align-items-center justify-content-center">
                            <li class="cafenabcrumb-item duxinbcrumb-begin">
                                <a href="index.php"><span>Anasayfa</span></a>
                            </li>
                            <li class="cafenabcrumb-item duxinbcrumb-end">
                                <span>Detaylar</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- blog area start -->
    <div class="blog-area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <div class="blog__wrapper blog__wrapper--single">
                        <article class="blog__post blog__post--single format format-image">
                            <div class="thumb">
                                <img src="<?= $selectedVal[0] -> blog_image ?>" alt="">
                            </div>
                            <ul class="meta mt-20 list-unstyled d-flex align-items-center">
                                <li><a href="#0"><i class="fal fa-file"></i> <?= $selectedVal[0]->blog_description ?></a></li>
                                <li><a href="#0"><i class="fal fa-calendar-alt"></i><?= $selectedVal[0]->blog_date_time ?></a></li>
                            </ul>
                            <div class="content mt-10">
                            <?= $selectedVal[0]->blog_comment ?>
                             
                            </div>



                           
                        </article>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="blog__sidebar mt-none-30">

                        <div class="widget mt-30">
                            <h2 class="title">POPÜLER BLOGLAR</h2>
                            <ul>
                                <?php foreach ($blog_JSON as $blog ) {?>
                                   <li class="cat-item"><a href="blog-details.php?name=<?= $blog -> blog_title ?>"><?= $blog -> blog_title ?></a> </li>
                                   <?php  } ?>
                                
                               

                            </ul>
                        </div>

                        <div class="widget border-0 p-0 mt-30">
                            <div class="widget_media_image">
                                <img src="assets/images/gallery/3.jpeg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog area end -->
</main>


<?php include 'php/footer.php' ?>


</body>

</html>