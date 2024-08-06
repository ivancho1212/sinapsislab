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


        <!-- Single Page Header start -->
        <div class="container-fluid page-header py-5">
            <h1 class="text-center text-white display-6">Shop</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-white">Shop</li>
            </ol>
        </div>
        <!-- Single Page Header End -->


        <!-- Fruits Shop Start-->
        <?php require_once(APP_VIEWS. "products/productShop3.php"); ?>

        <!-- Fruits Shop End-->


        <!-- Footer Start -->
               <?php require_once(APP_VIEWS. "footer/footer.php"); ?>

        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
    <!-- JavaScript Libraries -->
    <?php require_once(VIEWS_ASSETS. "js/js.php"); ?>

    </body>

</html>