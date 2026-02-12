<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Varsity | Gallery</title>

    <style>
        #mu-gallery img {
            width: 100%;
            margin-top: 10px;
            margin-bottom: 10px;
        }
    </style>

    <?php include "include/header.php"; ?>

    <!-- Page breadcrumb -->
    <section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-page-breadcrumb-area">
                        <h2>Gallery</h2>
                        <ol class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li class="active">Gallery</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb -->
    <!-- Start gallery  -->
    <section id="mu-gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-gallery-area">
                        <!-- start title -->
                        <div class="mu-title" style=" margin-bottum: 30px; ">
                            <h2>College Gallary</h2>
                        </div>
                        <!-- end title -->
                        <!-- start gallery content -->
                        <!-- <div class="mu-gallery-content">
                            <div class="mu-gallery-top">
                                <ul>
                                    <li class="filter active" data-filter="all">All</li>
                                    <li class="filter" data-filter=".lab">Lab</li>
                                    <li class="filter" data-filter=".classroom">Class Room</li>
                                    <li class="filter" data-filter=".library">Library</li>
                                    <li class="filter" data-filter=".cafe">Cafe</li>
                                    <li class="filter" data-filter=".others">Others</li>
                                </ul>
                            </div>
                            <div class="mu-gallery-body">
                                <ul id="mixit-container" class="row">
                                    <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                                        <div class="mu-single-gallery">
                                            <div class="mu-single-gallery-item">
                                                <div class="mu-single-gallery-img">
                                                    <a href="#"><img alt="img" src="assets/img/gallery/small/1.jpg"></a>
                                                </div>
                                                <div class="mu-single-gallery-info">
                                                    <div class="mu-single-gallery-info-inner">
                                                        <h4>Image Title</h4>
                                                        <p>Web Design</p>
                                                        <a href="assets/img/gallery/big/1.jpg"
                                                            data-fancybox-group="gallery" class="fancybox"><span
                                                                class="fa fa-eye"></span></a>
                                                        <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-4 col-sm-6 col-xs-12 mix library">
                                        <div class="mu-single-gallery">
                                            <div class="mu-single-gallery-item">
                                                <div class="mu-single-gallery-img">
                                                    <a href="#"><img alt="img" src="assets/img/gallery/small/2.jpg"></a>
                                                </div>
                                                <div class="mu-single-gallery-info">
                                                    <div class="mu-single-gallery-info-inner">
                                                        <h4>Image Title</h4>
                                                        <p>Animation</p>
                                                        <a href="assets/img/gallery/big/2.jpg"
                                                            data-fancybox-group="gallery" class="fancybox"><span
                                                                class="fa fa-eye"></span></a>
                                                        <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                                        <div class="mu-single-gallery">
                                            <div class="mu-single-gallery-item">
                                                <div class="mu-single-gallery-img">
                                                    <a href="#"><img alt="img" src="assets/img/gallery/small/3.jpg"></a>
                                                </div>
                                                <div class="mu-single-gallery-info">
                                                    <div class="mu-single-gallery-info-inner">
                                                        <h4>Image Title</h4>
                                                        <p>Math</p>
                                                        <a href="assets/img/gallery/big/3.jpg"
                                                            data-fancybox-group="gallery" class="fancybox"><span
                                                                class="fa fa-eye"></span></a>
                                                        <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-4 col-sm-6 col-xs-12 mix classroom">
                                        <div class="mu-single-gallery">
                                            <div class="mu-single-gallery-item">
                                                <div class="mu-single-gallery-img">
                                                    <a href="#"><img alt="img" src="assets/img/gallery/small/4.jpg"></a>
                                                </div>
                                                <div class="mu-single-gallery-info">
                                                    <div class="mu-single-gallery-info-inner">
                                                        <h4>Image Title</h4>
                                                        <p>English</p>
                                                        <a href="assets/img/gallery/big/4.jpg"
                                                            data-fancybox-group="gallery" class="fancybox"><span
                                                                class="fa fa-eye"></span></a>
                                                        <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-4 col-sm-6 col-xs-12 mix others">
                                        <div class="mu-single-gallery">
                                            <div class="mu-single-gallery-item">
                                                <div class="mu-single-gallery-img">
                                                    <a href="#"><img alt="img" src="assets/img/gallery/small/5.jpg"></a>
                                                </div>
                                                <div class="mu-single-gallery-info">
                                                    <div class="mu-single-gallery-info-inner">
                                                        <h4>Image Title</h4>
                                                        <p>Graphics</p>
                                                        <a href="assets/img/gallery/big/5.jpg"
                                                            data-fancybox-group="gallery" class="fancybox"><span
                                                                class="fa fa-eye"></span></a>
                                                        <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-4 col-sm-6 col-xs-12 mix cafe">
                                        <div class="mu-single-gallery">
                                            <div class="mu-single-gallery-item">
                                                <div class="mu-single-gallery-img">
                                                    <a href="#"><img alt="img" src="assets/img/gallery/small/6.jpg"></a>
                                                </div>
                                                <div class="mu-single-gallery-info">
                                                    <div class="mu-single-gallery-info-inner">
                                                        <h4>Image Title</h4>
                                                        <p>Health</p>
                                                        <a href="assets/img/gallery/big/6.jpg"
                                                            data-fancybox-group="gallery" class="fancybox"><span
                                                                class="fa fa-eye"></span></a>
                                                        <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-4 col-sm-6 col-xs-12 mix others">
                                        <div class="mu-single-gallery">
                                            <div class="mu-single-gallery-item">
                                                <div class="mu-single-gallery-img">
                                                    <a href="#"><img alt="img" src="assets/img/gallery/small/7.jpg"></a>
                                                </div>
                                                <div class="mu-single-gallery-info">
                                                    <div class="mu-single-gallery-info-inner">
                                                        <h4>Image Title</h4>
                                                        <p>Sports</p>
                                                        <a href="assets/img/gallery/big/7.jpg"
                                                            data-fancybox-group="gallery" class="fancybox"><span
                                                                class="fa fa-eye"></span></a>
                                                        <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-4 col-sm-6 col-xs-12 mix library">
                                        <div class="mu-single-gallery">
                                            <div class="mu-single-gallery-item">
                                                <div class="mu-single-gallery-img">
                                                    <a href="#"><img alt="img" src="assets/img/gallery/small/8.jpg"></a>
                                                </div>
                                                <div class="mu-single-gallery-info">
                                                    <div class="mu-single-gallery-info-inner">
                                                        <h4>Image Title</h4>
                                                        <p>Health</p>
                                                        <a href="assets/img/gallery/big/8.jpg"
                                                            data-fancybox-group="gallery" class="fancybox"><span
                                                                class="fa fa-eye"></span></a>
                                                        <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                                        <div class="mu-single-gallery">
                                            <div class="mu-single-gallery-item">
                                                <div class="mu-single-gallery-img">
                                                    <a href="#"><img alt="img" src="assets/img/gallery/small/9.jpg"></a>
                                                </div>
                                                <div class="mu-single-gallery-info">
                                                    <div class="mu-single-gallery-info-inner">
                                                        <h4>Image Title</h4>
                                                        <p>Sports</p>
                                                        <a href="assets/img/gallery/big/9.jpg"
                                                            data-fancybox-group="gallery" class="fancybox"><span
                                                                class="fa fa-eye"></span></a>
                                                        <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div> -->
                        <!-- end gallery content -->

                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <img src="assets/img/event/img16.jpeg" alt="Event">
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <img src="assets/img/event/img15.jpeg" alt="Event">
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <img src="assets/img/event/img14.jpeg" alt="Event">
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <img src="assets/img/event/img13.jpeg" alt="Event">
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <img src="assets/img/event/img12.jpeg" alt="Event">
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <img src="assets/img/event/img11.jpeg" alt="Event">
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <img src="assets/img/event/img10.jpeg" alt="Event">
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <img src="assets/img/event/img17.jpg" alt="Event">
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <img src="assets/img/event/img18.jpg" alt="Event">
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <img src="assets/img/event/img19.jpg" alt="Event">
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <img src="assets/img/event/img20.jpg" alt="Event">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End gallery  -->

    <?php include "include/footer.php"; ?>