<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Amatta</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" />

    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/all.css" />

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
        href="https://fonts.googleapis.com/css2?family=Lora:wght@400;600&family=Montserrat:wght@200;400;600;800&display=swap"
        rel="stylesheet" />


    <link rel="icon" href="img/logo/title2.png">
</head>

<body>

    <!-- Navbar -->
    @include('frontlayouts.navbar')
    <!-- Navbar End -->

    <!-- Corousel -->
    <div class="container mt-3">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/slideshow/2.png" class="d-block w-100" alt="..." />
                    <div class="row">
                        <div class="col-sm-4">
                            <h1 class="title">BIG SALE</h1>
                            <p>Discount 20% For Amatta Members</p>
                            <a href="" class="btn btn-primary">Get It Now</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/slideshow/3.jpg" class="d-block w-100" alt="..." />
                    <h1 class="title">BIG PROMO</h1>
                    <p>Discount 20% For Amatta Members</p>
                    <a href="" class="btn btn-primary">Get It Now</a>
                </div>
                <div class="carousel-item">
                    <img src="img/slideshow/4.png" class="d-block w-100" alt="..." />
                    <h1 class="title">PROMO TAHUN BARU</h1>
                    <p>Discount 20% For Amatta Members</p>
                    <a href="" class="btn btn-primary">Get It Now</a>
                </div>
            </div>
            <a class="carousel-control-prev carusel-tanda" href="#carouselExampleControls" role="button"
                data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next carusel-tanda" href="#carouselExampleControls" role="button"
                data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- Corousel End -->


    <section class="features pt-3">
        <div class="container">
            <div class="row mb-2">
                <div class="col">
                    <h3>Category</h3>
                    <p>Berbagai macam product amatta</p>
                </div>
            </div>


            <div class="row">
                <div class="col-2 ">
                    <div class="cardbody ">
                        <p class="title pt-2">Sayur </p>
                    </div>

                </div>
                <div class="col-2 ">
                    <div class="cardbody ">
                        <p class="title pt-2">Buah </p>
                    </div>

                </div>
            </div>


        </div>
    </section>


    <section class="features pt-2">
        <div class="container">
            <div class="row mb-2">
                <div class="col">
                    <h3>New Product</h3>
                    <p>We only provide the best product </p>
                </div>
            </div>

            <div class="row mb-0">
                <div class="col-12 col-sm-6 col-lg-3">
                    <figure class="figure">
                        <div class="figure-img product-thumbnail-home">
                            <img src="img/produck/Bayam Hijau/bayamhijau1.jpg"
                                class="figure-img product-thumbnail-home img-fluid rounded" />
                            <a href="" class="d-flex justify-content-center">
                                <img src="img/icon/plus.png" class="align-self-center" />
                            </a>
                        </div>
                        <figcaption class="figure-caption">
                            <h5>Bayam Hijau</h5>
                            <p>IDR 6000</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <figure class="figure">
                        <div class="figure-img product-thumbnail-home">
                            <img src="img/produck/Caisim/caisim1.jpg"
                                class="figure-img product-thumbnail-home img-fluid rounded" />
                            <a href="" class="d-flex justify-content-center">
                                <img src="img/icon/plus.png" class="align-self-center" />
                            </a>
                        </div>
                        <figcaption class="figure-caption">
                            <h5>Caisim</h5>
                            <p>IDR 6000</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <figure class="figure">
                        <div class="figure-img product-thumbnail-home">
                            <img src="img/produck/Kangkung/kangkung1.jpg"
                                class="figure-img product-thumbnail-home img-fluid rounded" />
                            <a href="" class="d-flex justify-content-center">
                                <img src="img/icon/plus.png" class="align-self-center" />
                            </a>
                        </div>
                        <figcaption class="figure-caption">
                            <h5>Bayam Merah</h5>
                            <p>IDR 6000</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <figure class="figure">
                        <div class="figure-img product-thumbnail-home">
                            <img src="img/produck/Bayam Merah/bayammerah1.jpg"
                                class="figure-img product-thumbnail-home img-fluid rounded" />
                            <a href="" class="d-flex justify-content-center">
                                <img src="img/icon/plus.png" class="align-self-center" />
                            </a>
                        </div>
                        <figcaption class="figure-caption">
                            <h5>Kangkung</h5>
                            <p>IDR 6000</p>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="row mb-0">
                <div class="col-12 col-sm-6 col-lg-3">
                    <figure class="figure">
                        <div class="figure-img product-thumbnail-home">
                            <img src="img/produck/Bayam Hijau/bayamhijau1.jpg"
                                class="figure-img product-thumbnail-home img-fluid rounded" />
                            <a href="" class="d-flex justify-content-center">
                                <img src="img/icon/plus.png" class="align-self-center" />
                            </a>
                        </div>
                        <figcaption class="figure-caption">
                            <h5>Bayam Hijau</h5>
                            <p>IDR 6000</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <figure class="figure">
                        <div class="figure-img product-thumbnail-home">
                            <img src="img/produck/Caisim/caisim1.jpg"
                                class="figure-img product-thumbnail-home img-fluid rounded" />
                            <a href="" class="d-flex justify-content-center">
                                <img src="img/icon/plus.png" class="align-self-center" />
                            </a>
                        </div>
                        <figcaption class="figure-caption">
                            <h5>Caisim</h5>
                            <p>IDR 6000</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <figure class="figure">
                        <div class="figure-img product-thumbnail-home">
                            <img src="img/produck/Kangkung/kangkung1.jpg"
                                class="figure-img product-thumbnail-home img-fluid rounded" />
                            <a href="" class="d-flex justify-content-center">
                                <img src="img/icon/plus.png" class="align-self-center" />
                            </a>
                        </div>
                        <figcaption class="figure-caption">
                            <h5>Bayam Merah</h5>
                            <p>IDR 6000</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <figure class="figure">
                        <div class="figure-img product-thumbnail-home">
                            <img src="img/produck/Bayam Merah/bayammerah1.jpg"
                                class="figure-img product-thumbnail-home img-fluid rounded" />
                            <a href="" class="d-flex justify-content-center">
                                <img src="img/icon/plus.png" class="align-self-center" />
                            </a>
                        </div>
                        <figcaption class="figure-caption">
                            <h5>Kangkung</h5>
                            <p>IDR 6000</p>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="row mb-0">
                <div class="col-12 col-sm-6 col-lg-3">
                    <figure class="figure">
                        <div class="figure-img product-thumbnail-home">
                            <img src="img/produck/Bayam Hijau/bayamhijau1.jpg"
                                class="figure-img product-thumbnail-home img-fluid rounded" />
                            <a href="" class="d-flex justify-content-center">
                                <img src="img/icon/plus.png" class="align-self-center" />
                            </a>
                        </div>
                        <figcaption class="figure-caption">
                            <h5>Bayam Hijau</h5>
                            <p>IDR 6000</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <figure class="figure">
                        <div class="figure-img product-thumbnail-home">
                            <img src="img/produck/Caisim/caisim1.jpg"
                                class="figure-img product-thumbnail-home img-fluid rounded" />
                            <a href="" class="d-flex justify-content-center">
                                <img src="img/icon/plus.png" class="align-self-center" />
                            </a>
                        </div>
                        <figcaption class="figure-caption">
                            <h5>Caisim</h5>
                            <p>IDR 6000</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <figure class="figure">
                        <div class="figure-img product-thumbnail-home">
                            <img src="img/produck/Kangkung/kangkung1.jpg"
                                class="figure-img product-thumbnail-home img-fluid rounded" />
                            <a href="" class="d-flex justify-content-center">
                                <img src="img/icon/plus.png" class="align-self-center" />
                            </a>
                        </div>
                        <figcaption class="figure-caption">
                            <h5>Bayam Merah</h5>
                            <p>IDR 6000</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <figure class="figure">
                        <div class="figure-img product-thumbnail-home">
                            <img src="img/produck/Bayam Merah/bayammerah1.jpg"
                                class="figure-img product-thumbnail-home img-fluid rounded" />
                            <a href="" class="d-flex justify-content-center">
                                <img src="img/icon/plus.png" class="align-self-center" />
                            </a>
                        </div>
                        <figcaption class="figure-caption">
                            <h5>Kangkung</h5>
                            <p>IDR 6000</p>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="row mb-0">
                <div class="col-12 col-sm-6 col-lg-3">
                    <figure class="figure">
                        <div class="figure-img product-thumbnail-home">
                            <img src="img/produck/Bayam Hijau/bayamhijau1.jpg"
                                class="figure-img product-thumbnail-home img-fluid rounded" />
                            <a href="" class="d-flex justify-content-center">
                                <img src="img/icon/plus.png" class="align-self-center" />
                            </a>
                        </div>
                        <figcaption class="figure-caption">
                            <h5>Bayam Hijau</h5>
                            <p>IDR 6000</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <figure class="figure">
                        <div class="figure-img product-thumbnail-home">
                            <img src="img/produck/Caisim/caisim1.jpg"
                                class="figure-img product-thumbnail-home img-fluid rounded" />
                            <a href="" class="d-flex justify-content-center">
                                <img src="img/icon/plus.png" class="align-self-center" />
                            </a>
                        </div>
                        <figcaption class="figure-caption">
                            <h5>Caisim</h5>
                            <p>IDR 6000</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <figure class="figure">
                        <div class="figure-img product-thumbnail-home">
                            <img src="img/produck/Kangkung/kangkung1.jpg"
                                class="figure-img product-thumbnail-home img-fluid rounded" />
                            <a href="" class="d-flex justify-content-center">
                                <img src="img/icon/plus.png" class="align-self-center" />
                            </a>
                        </div>
                        <figcaption class="figure-caption">
                            <h5>Bayam Merah</h5>
                            <p>IDR 6000</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <figure class="figure">
                        <div class="figure-img product-thumbnail-home">
                            <img src="img/produck/Bayam Merah/bayammerah1.jpg"
                                class="figure-img product-thumbnail-home img-fluid rounded" />
                            <a href="" class="d-flex justify-content-center">
                                <img src="img/icon/plus.png" class="align-self-center" />
                            </a>
                        </div>
                        <figcaption class="figure-caption">
                            <h5>Kangkung</h5>
                            <p>IDR 6000</p>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    @include('frontlayouts.footer')
    <!-- Footer -->
    <!-- Optional JavaScript; choose one of the two! -->
    <script src="js/jquery-3.5.1.min.js "></script>
    <script src="https://unpkg.com/@popperjs/core@2.4.4/dist/umd/popper.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js "></script>
    <script src="js/bootstrap.js "></script>
    <script src="js/all.js "></script>
    @stack('script')
    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS-->

</body>

</html>
