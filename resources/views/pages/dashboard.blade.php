@extends('frontlayouts.app')
@section('content')
    {{-- carousel start --}}
    <div class="mx-4 my-4">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('front/img/slideshow/2.png') }}" class="d-block w-100 rounded" alt="...">
                    <div class="carousel-caption d-none d-md-block">

                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('front/img/slideshow/3.jpg') }}" class="d-block w-100 rounded" alt="...">
                    <div class="carousel-caption d-none d-md-block">


                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('front/img/slideshow/4.png') }}" class="d-block w-100 rounded" alt="...">
                    <div class="carousel-caption d-none d-md-block">


                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>


    <!-- Corousel End -->


    <section class="features pt-3">
        <div class="container border mb-2 shadow-sm p-3 mb-5 bg-white rounded">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <h3 class="font-weight-600" style="font-size: 22px">Kategori Pilihan</h3>
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm2">
                                    <a href="" class="btn btn-info rounded mx-2 my-2">Sayur</a>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm2">
                                    <a href="" class="btn btn-info rounded mx-2 my-2">Sayur</a>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm2">
                                    <a href="" class="btn btn-info rounded mx-2 my-2">Sayur</a>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm2">
                                    <a href="" class="btn btn-info rounded mx-2 my-2">Sayur</a>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-3 px-2 my-2">
            <div class="row px-xl-3 pb-3">
                <div class="col-lg-3 col-md-6 col-sm-12 pb-2">
                    <div class="d-flex align-items-center mb-2 border border-2 shadow-sm">
                        <h1 class="text-info px-3 mt-1 py-2"><i class="bi bi-check-lg"></i></h1>
                        <h5 class="font-weight-semi-bold px-2 py-2 m-1">Qualitas Terjamin</h5>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 pb-2">
                    <div class="d-flex align-items-center mb-2 border border-2 shadow-sm">
                        <h1 class="text-info px-3 mt-1 py-2"><i class="bi bi-credit-card-2-front"></i></h1>
                        <h5 class="font-weight-semi-bold px-2 py-2 m-1">Pembayarn Terpadu</h5>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 pb-2">
                    <div class="d-flex align-items-center mb-2 border border-2 shadow-sm">
                        <h1 class="text-info px-3 mt-1 py-2"><i class="bi bi-truck"></i></h1>
                        <h5 class="font-weight-semi-bold px-2 py-2 m-1">Pengiriman Terpadu</h5>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 pb-2">
                    <div class="d-flex align-items-center mb-2 border border-2 shadow-sm">
                        <h1 class="text-info px-3 mt-1 py-2"><i class="bi bi-telephone-inbound"></i></h1>
                        <h5 class="font-weight-semi-bold px-2 py-2 m-1">Dukungan CS 24/7</h5>
                    </div>
                </div>


            </div>
        </div>

    </section>
    <section class="features pt-2">
        <div class="container">
            <div class="row mb-2">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3>New Product</h3>
                        <hr class="underline">
                        <p class="text-secondary">We only provide the best product </p>
                    </div>
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

    <section class="features p-2 m-4">
        <div class="container">
            <div class="row flex">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="baner-pic">
                        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                            alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="baner-pic">
                        <img src="https://images.unsplash.com/photo-1606787366850-de6330128bfc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                            alt="">
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="features p-2 m-2">
        <div class="container">
            <div class="row mb-2">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3>From The Blog</h3>
                        <hr class="underline">
                    </div>
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
    </section>
@endsection
