<!DOCTYPE html>
<html lang="en">

    <head>
       
        <?php require_once(APP_VIEWS. "head/head.php"); ?>

        <?php require_once(VIEWS_ASSETS. "css/css.php"); ?>
    </head>

    <body>

        <!-- Spinner Start -->
        <?php require_once(APP_VIEWS. "spinner/spinner.php"); ?>

        <!-- Spinner End -->


        <!-- Navbar start -->
        <?php require_once(APP_VIEWS. "nav/nav.php"); ?>
        <!-- Navbar End -->


        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->


        <!-- Hero Start -->
        <div class="container-fluid py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-md-12 col-lg-7">
                        <h4 class="mb-3 text-secondary">100% Organic Foods</h4>
                        <h1 class="mb-5 display-3 text-primary">Organic Veggies & Fruits Foods</h1>
                        <div class="position-relative mx-auto">
                            <input class="form-control border-2 border-secondary w-75 py-3 px-4 rounded-pill" type="number" placeholder="Search">
                            <button type="submit" class="btn btn-primary border-2 border-secondary py-3 px-4 position-absolute rounded-pill text-white h-100" style="top: 0; right: 25%;">Submit Now</button>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-5">
                    <?php require_once(APP_VIEWS. "carousel/carousel.php"); ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->

        <!-- Fruits Shop Start-->
        <?php require_once(APP_VIEWS. "products/productShop2.php"); ?>

        <!-- Fruits Shop End-->

          <!-- Bestsaler Product Start -->
        <?php require_once(APP_VIEWS. "products/bestsalerProduct.php"); ?>

        <!-- Bestsaler Product End -->


        <!-- Featurs Start -->
        <?php require_once(APP_VIEWS. "promotion/promotions.php"); ?>

        <!-- Featurs End -->

        <!-- Featurs Section Start -->
        <?php require_once(APP_VIEWS. "characteristics/characteristics.php"); ?>

        <!-- Featurs Section End -->

        <!-- Banner Section Start-->
        <?php require_once(APP_VIEWS. "banner/bannerSection.php"); ?>

        <!-- Banner Section End -->

        <!-- Fact Start -->
        <?php require_once(APP_VIEWS. "fact/fact.php"); ?>

        <!-- Fact End -->

        <!-- Vesitable Shop Start-->
        <div class="container-fluid vesitable py-5">
            <div class="container py-5">
                <h1 class="mb-0">Fresh Organic Vegetables</h1>
                <?php require_once(APP_VIEWS. "products/productShop.php"); ?>

            </div>
        </div>
        <!-- Vesitable Shop End -->  

        <!-- Tastimonial Start -->
        <?php require_once(APP_VIEWS. "testimonial/tastimonial.php"); ?>

        <!-- Tastimonial End -->

        <!-- form Start -->
        <?php require_once(APP_VIEWS. "form/form.php"); ?>

        <!-- form End -->

        <!-- Footer Start -->
        <?php require_once(APP_VIEWS. "footer/footer.php"); ?>
        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
    <!-- JavaScript Libraries -->
    <?php require_once(VIEWS_ASSETS. "js/js.php"); ?>

    </body>

</html>