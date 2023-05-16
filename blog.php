<?php include 'php/head.php' ?>
<?php include 'php/header.php' ?>
    <main>
        <!-- breadcrumb area start -->
        <section class="breadcrumb-area pt-140 pb-140 bg_img" data-background="assets/images/alacati/blog-banner.jpg" data-overlay="dark" data-opacity="5">
            <div class="shape shape__1"><img src="assets/images/shape/breadcrumb-shape-1.png" alt=""></div>
            <div class="shape shape__2"><img src="assets/images/shape/breadcrumb-shape-2.png" alt=""></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 text-center">
                        <h2 class="page-title">&nbsp;</h2>
                        <div class="cafena-breadcrumb breadcrumbs">
                            <!-- <ul class="list-unstyled d-flex align-items-center justify-content-center">
                                <li class="cafenabcrumb-item duxinbcrumb-begin">
                                    <a href="index.php"><span>Anasayfa</span></a>
                                </li>
                                <li class="cafenabcrumb-item duxinbcrumb-end">
                                    <span>Blog</span>
                                </li>
                            </ul> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->

        <!-- blog area start -->
        <div class="blog-area pt-120 pb-105">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="blog__wrapper mt-none-30">
                            <?php foreach ($blog_JSON as $blog) {?>
                                <article class="blog__post format format-image mt-30">
                                <div class="thumb">
                                    <img src=" <?= $blog -> blog_image ?>" alt="">
                                </div>
                                <ul class="meta mt-20 list-unstyled d-flex align-items-center">
                                    <li><a href="#0"><i class="fal fa-file"></i> <?= $blog -> blog_description ?></a></li>
                                    <li><a href="#0"><i class="fal fa-calendar-alt"></i><?= $blog -> blog_date_time ?></a></li>
                                </ul>
                                <div class="content mt-10">
                                    <h2 class="title border-effect mb-10"><a href="blog-detaylari.php?name=<?= $blog -> blog_link ?>"><?= $blog -> blog_title ?></a></h2>
                                    <p><?= $blog -> blog_short_comment ?>
                                    </p>
                                </div>
                                <div class="bottom mt-35 d-flex align-items-center">
                                    <a href="blog-detaylari.php?name=<?= $blog -> blog_link ?>" class="site-btn">Daha Fazlası</a>
                                    
                                </div>
                            </article>
                            <?php } ?>
                            
                          
                        </div>
                        <!-- <div class="cafena-pagination mt-60">
                            <ul>
                                <li><a href="#"><span><i class="far fa-angle-double-left"></i></span></a></li>
                                <li><a href="#"><span>01</span></a></li>
                                <li><a href="#"><span class="current">02</span></a></li>
                                <li><a href="#"><span>03</span></a></li>
                                <li><a href="#"><span>...</span></a></li>
                                <li><a href="#"><span>10</span></a></li>
                                <li><a href="#"><span><i class="far fa-angle-double-right"></i></span></a></li>
                            </ul>
                        </div> -->
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="blog__sidebar mt-none-30">
                           
                            <div class="widget mt-30">
                                <h2 class="title">POPÜLER BLOGLAR</h2>
                                <ul>
                                <?php foreach ($blog_JSON as $blog ) {?>
                                   <li class="cat-item"><a href="blog-detaylari.php?name=<?= $blog -> blog_link ?>"><?= $blog -> blog_title ?></a> </li>
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