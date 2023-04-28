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
                    <h2 class="page-title">Lawaga Truck</h2>
                    <div class="cafena-breadcrumb breadcrumbs">
                        <ul class="list-unstyled d-flex align-items-center justify-content-center">
                            <li class="cafenabcrumb-item duxinbcrumb-begin">
                                <a href="index.php"><span>Anasayfa</span></a>
                            </li>
                            <li class="cafenabcrumb-item duxinbcrumb-end">
                                <span>Lawaga Truck</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- about area start -->
    
    <section class="about__area about__area--2 grey-bg position-relative pt-60 pb-60 ">
        <span class="shape shape__1 position-absolute"><img src="assets/images/shape/about-shape-2-1.png" alt=""></span>
        <span class="shape shape__2 position-absolute"><img src="assets/images/shape/about-shape-2-2.png" alt=""></span>
        <div class="container">
            <div class="row">

                <div class="col-xl-7 ">
                    <div class="about__right about__right--2  pt-45">
                        <div class="section-heading section-heading__black">
                            <!-- <span class="sub-title">about us</span> -->
                            <h2 class="title mb-25">Lawaga Truck</h2>
                            <p> çizdiğin her rotada, yeni yerler keşfetmenin tadını doya doya çıkar diye, tüm yolculuklarında sana eşlik ediyor. Bu coğrafyanın her noktasında gerçek kahve tadına ulaşabilmen için etkinlikler, konserler ve buluşmalarda seni yalnız bırakmıyor. Lezzete ilham olan tutkusuyla, bu büyülü hikayeyi adım adım her yere taşıyor.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-7">
                    <div class="about__left about__left--2 position-relative">
                        <img  src="assets/images/lawaga-truck.jpeg" alt="img">
                        <!-- <img class="small position-absolute" src="assets/images/about/about-img-2-2.png" alt="img"> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- wcu section end -->

    <!-- best-coffe section start -->
    <div class="best-coffe__area position-relative">
        <div class="best-coffe__bg">
            <img src="assets/images/3.jpeg" alt="">
        </div>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-xl-8 pl-35">
                    <div class="best-coffe__wrapper">
                        <div class="section-heading section-heading__black">
                            <h2 class="title  text-center">Bilgi Al</h2>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="contact__form mt-20">
                                    <form method="POST" action="mail/mail.php" >
                                        <div class="row">
                                            <div class="col-xl-6 mt-30">
                                                <div class="form-group">
                                                    <input type="text" name="patientnamesurname"  placeholder="Adınız :">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 mt-30">
                                                <div class="form-group">
                                                    <input type="email" name="mail"  placeholder="Mail :">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 mt-30">
                                                <div class="form-group">
                                                    <input type="text" name="patientSubject"  placeholder="Konu :">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 mt-30">
                                                <div class="form-group">
                                                    <input type="text" name="patientPhone"  placeholder="Telefon :">
                                                </div>
                                            </div>
                                            <div class="col-xl-12 mt-30">
                                                <div class="form-group">
                                                    <textarea name="patientNote"  placeholder="Mesaj :"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 mt-20 text-center">
                                            <input style="display: none;" value="Lawaga Truck" name="sayfa" type="text">
                                                <button type="submit" class="site-btn">Mesaj Gönder</button>
                                            </div>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- best-coffe section end -->

    <!-- team section start -->

    <!-- team section end -->

</main>

<?php include 'php/footer.php' ?>
</body>

</html>