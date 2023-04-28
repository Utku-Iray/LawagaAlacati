<?php include 'php/head.php' ?>
<?php include 'php/header.php' ?>
<main>
    <!-- breadcrumb area start -->
    <section class="breadcrumb-area pt-140 pb-200 bg_img" data-background="assets/images/menu/menu-banner.png"  data-opacity="5">
        <div class="shape shape__1"><img src="assets/images/shape/breadcrumb-shape-1.png" alt=""></div>
        <div class="shape shape__2"><img src="assets/images/shape/breadcrumb-shape-2.png" alt=""></div>
        <!-- <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center">
                    <h2 class="page-title">MENÜ</h2>
                    <div class="cafena-breadcrumb breadcrumbs">
                        <ul class="list-unstyled d-flex align-items-center justify-content-center">
                            <li class="cafenabcrumb-item duxinbcrumb-begin">
                                <a href="index.php"><span>Anasayfa</span></a>
                            </li>
                            <li class="cafenabcrumb-item duxinbcrumb-end">
                                <span>MENÜ</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> -->
    </section>
    <!-- breadcrumb area end -->

    <!-- populer menu area start -->
    <section class="popular-menu__area position-relative pb-120 pt-115">
        <div class="container">
            <!-- <div class="row">
                    <div class="col-xl-12 text-center">
                        <div class="section-heading section-heading__black mb-40">
                            <span class="sub-title">menu</span>
                            <h2 class="title">Our Popular Menu</h2>
                        </div>
                    </div>
                </div> -->
            <div class="row">
                <div class="col-xl-12 text-center">
                    <div class="popular-menu__wrapper m-auto d-inline-block">
                        <div class="popular-menu__filter d-flex justify-content-center align-items-center mb-45">
                            <button class="active" data-filter="*">Tümü</button>
                            <?php foreach ($category_JSON as $categories) { ?>
                                <button data-filter=".cat-<?= $categories->category_name ?>"><?= $categories->category_name ?></button>
                            <?php }  ?>

                        </div>
                    </div>
                </div>
            </div>
            <div id="popular-menu-grid-2" class="row popular-menu__grid popular-menu__lists mt-none-30">
                <div class="col-xl-6 col-lg-6 col-md-6 l-item grid-sizer"></div>
                <?php foreach ($menu_JSON as $menuItem) { ?>
                    <div class="col-xl-6 col-lg-6 col-md-6 l-item grid-item mt-35 cat-<?= $menuItem->category_name ?>">
                        <div class="popular-menu__list" style="background-image:url(<?= $menuItem->product_image ?>) ;" >
                            <div class="thumb">
                                <img src="<?= $menuItem->product_image ?>" alt="">
                            </div>
                            <div class="content">
                                <h3 class="title border-effect view" prod-id="<?= $menuItem->id ?>"><a href="#0"><?= $menuItem->product_name ?>
                                
                                <!-- <br> <span>
                                     <?php
                                $productIng = $menuItem->product_description;
                                $prodIngCount = count($productIng);
                           
                                if ($prodIngCount > 0) {
                                    for ($i = 0; $i < 2; $i++) {
                                ?>
                                        <li><?= $productIng[$i] ?></li>
                                <?php   }
                                }
                                ?>
                                </span>  -->
                            </a></h3>
                             
                            
                                <span class="price"><?= $menuItem->product_price ?></span>
                            </div>
                        </div>
                    </div>
                <?php   } ?>

            </div>
            <!-- <div class="row">
                    <div class="col-xl-12 text-center">
                        <a href="#0" class="site-btn mt-60">load more</a>
                    </div>
                </div> -->
        </div>
    </section>

    <div class="product-popup product-popup-1">
        <div class="view-background">
            <div class="row">
                <div class="col-md-4 align-self-center">
                    <div class="quickview d-flex align-items-center justify-content-center">
                        <div class="quickview__thumb">
                            <img id="productImage" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="viewcontent">
                        <div class="viewcontent__header">
                            <h2 id="productName"></h2>
                            <a class="view_close product-p-close" href="javascript:void(0)"><i class="fal fa-times"></i></a>
                        </div>

                        <div class="viewcontent__price">
                            <h4 id="productPrice"></h4>
                        </div>
                        <div class="viewcontent__price">
                            <h4 id="productPriceDiscounted" style="text-decoration: line-through;"></h4>
                            <h4 id="productNewPrice"></h4>
                        </div>

                        <div class="viewcontent__details">
                        <p >Anlor sit amet, consectetur adipiscing elit. Fusce condimentum est lacus, non pretium risus lacinia vel. Fusce eget turpis orci.</p>
                            <ul id="productIngredents"></ul>
                        </div>

                        <div class="viewcontent__footer">
                            <ul class="list-unstyled">
                                <li>Kategorİ:</li>

                            </ul>
                            <ul class="list-unstyled">
                                <li id="category"></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- populer menu area end -->

</main>

<?php include 'php/footer.php' ?>
<script>
    $('.view').on('click', function() {

        var id = $(this).attr("prod-id");
        $.ajax({
            url: "php/product_popup_action.php",
            type: "POST",
            data: {
                productID: id,
            },
            success: function(data) {
                var response = $.parseJSON(data);


                document.getElementById("productName").innerText = response["product_name"];
                document.getElementById("productImage").src = response["product_image"];
                document.getElementById("category").innerText = response["category_name"];

                document.getElementById("productPrice").innerText = "";
                document.getElementById("productPriceDiscounted").innerText = "";
                document.getElementById("productNewPrice").innerText = "";

                if (response["product_new_price"] != "") {
                    document.getElementById("productPriceDiscounted").innerText = response["product_price"];
                    document.getElementById("productNewPrice").innerText = response["product_new_price"];
                } else {
                    document.getElementById("productPrice").innerText = response["product_price"];
                }

                document.getElementById("productIngredents").innerText = "";
                var ul = document.getElementById("productIngredents");
                var productIngredents = response["product_description"];
                for (let i = 0; i < productIngredents.length; i++) {
                    var li = document.createElement("li");
                    li.appendChild(document.createTextNode(productIngredents[i]));
                    ul.appendChild(li);
                }
                console.log(resposinve)

            }
        })


        $('.overlay, .product-popup-1').addClass('show-popup');
    });
</script>


</body>

</html>