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

    {{-- sectionkategoriproduk --}}
    <section class="features pt-3">
        <div class="container border mb-2 shadow-sm p-3 mb-5 bg-white rounded">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h3 class="font-weight-600 " style="font-size: 20px">Kategori Pilihan</h3>
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
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- end sectionkategoriproduk --}}

    <section class="features pt-2">
        <div class="container">
            <div class="row mb-2 ">
                <div class="col-lg-12">
                    <div class="section-title-product ">
                        <h3>Product</h3>
                        <p class="text-secondary">We only provide the best product </p>
                    </div>
                </div>
            </div>

            <div class="row mb-0 text-center">
                <div class="col-md-6 col-sm-12 col-lg-3">
                    <div class="card-box border shadow mb-3">
                        <figure class="figure">
                            <div class="figure-img product-thumbnail-home">
                                <img src="https://images.unsplash.com/photo-1615485290382-441e4d049cb5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80"
                                    class="figure-img product-thumbnail-home img-fluid rounded" />
                                <a href="" class="d-flex justify-content-center">
                                    <img src="{{ asset('front/img/icon/plus.png') }}" class="align-self-center" />
                                </a>
                            </div>
                            <figcaption class="figure-caption text-left px-2 py-1 m-1">
                                <h5>Bayam Hijau</h5>
                                <p class="text-success">IDR 6000</p>
                                <div class="d-flex">
                                    <a href="" class="ml-2 text-primary text-l"><i class="bi bi-bag"></i> Add to
                                        chart</a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-3">
                    <div class="card-box border shadow mb-3">
                        <figure class="figure">
                            <div class="figure-img product-thumbnail-home">
                                <img src="https://images.unsplash.com/photo-1585849834908-3481231155e8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80"
                                    class="figure-img product-thumbnail-home img-fluid rounded" />
                                <a href="" class="d-flex justify-content-center">
                                    <img src="{{ asset('front/img/icon/plus.png') }}" class="align-self-center" />
                                </a>
                            </div>
                            <figcaption class="figure-caption text-left px-2 py-1 m-1">
                                <h5>Bawang Merah</h5>
                                <p class="text-success">IDR 3000</p>
                                <div class="d-flex">
                                    <a href="" class="ml-2 text-primary text-l"><i class="bi bi-bag"></i> Add to
                                        chart</a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-3">
                    <div class="card-box border shadow mb-3">
                        <figure class="figure">
                            <div class="figure-img product-thumbnail-home">
                                <img src="https://images.unsplash.com/photo-1587411768515-eeac0647deed?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80"
                                    class="figure-img product-thumbnail-home img-fluid rounded" />
                                <a href="" class="d-flex justify-content-center">
                                    <img src="{{ asset('front/img/icon/plus.png') }}" class="align-self-center" />
                                </a>
                            </div>
                            <figcaption class="figure-caption text-left px-2 py-1 m-1">
                                <h5>Tomat</h5>
                                <p class="text-success">IDR 2500</p>
                                <div class="d-flex">
                                    <a href="" class="ml-2 text-primary text-l"><i class="bi bi-bag"></i> Add to
                                        chart</a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-3">
                    <div class="card-box border shadow mb-3">
                        <figure class="figure">
                            <div class="figure-img product-thumbnail-home">
                                <img src="https://images.unsplash.com/photo-1570586437263-ab629fccc818?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=435&q=80"
                                    class="figure-img product-thumbnail-home img-fluid rounded" />
                                <a href="" class="d-flex justify-content-center">
                                    <img src="{{ asset('front/img/icon/plus.png') }}" class="align-self-center" />
                                </a>
                            </div>
                            <figcaption class="figure-caption text-left px-2 py-1 m-1">
                                <h5>Labu</h5>
                                <p class="text-success">IDR 5500</p>
                                <div class="d-flex">
                                    <a href="" class="ml-2 text-primary text-l"><i class="bi bi-bag"></i> Add to
                                        chart</a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-3">
                    <div class="card-box border shadow mb-3">
                        <figure class="figure">
                            <div class="figure-img product-thumbnail-home">
                                <img src="https://images.unsplash.com/photo-1567375698348-5d9d5ae99de0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=435&q=80"
                                    class="figure-img product-thumbnail-home img-fluid rounded" />
                                <a href="" class="d-flex justify-content-center">
                                    <img src="{{ asset('front/img/icon/plus.png') }}" class="align-self-center" />
                                </a>
                            </div>
                            <figcaption class="figure-caption text-left px-2 py-1 m-1">
                                <h5>Kacang Panjang</h5>
                                <p class="text-success">IDR 1500</p>
                                <div class="d-flex">
                                    <a href="" class="ml-2 text-primary text-l"><i class="bi bi-bag"></i> Add to
                                        chart</a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-3">
                    <div class="card-box border shadow mb-3">
                        <figure class="figure">
                            <div class="figure-img product-thumbnail-home">
                                <img src="https://images.unsplash.com/photo-1594282486552-05b4d80fbb9f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=385&q=80"
                                    class="figure-img product-thumbnail-home img-fluid rounded" />
                                <a href="" class="d-flex justify-content-center">
                                    <img src="{{ asset('front/img/icon/plus.png') }}" class="align-self-center" />
                                </a>
                            </div>
                            <figcaption class="figure-caption text-left px-2 py-1 m-1">
                                <h5>Daun Kol</h5>
                                <p class="text-success">IDR 1500</p>
                                <div class="d-flex">
                                    <a href="" class="ml-2 text-primary text-l"><i class="bi bi-bag"></i> Add to
                                        chart</a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-3">
                    <div class="card-box border shadow mb-3">
                        <figure class="figure">
                            <div class="figure-img product-thumbnail-home">
                                <img src="https://images.unsplash.com/photo-1526346698789-22fd84314424?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                                    class="figure-img product-thumbnail-home img-fluid rounded" />
                                <a href="" class="d-flex justify-content-center">
                                    <img src="{{ asset('front/img/icon/plus.png') }}" class="align-self-center" />
                                </a>
                            </div>
                            <figcaption class="figure-caption text-left px-2 py-1 m-1">
                                <h5>Cabai Merah Panjang</h5>
                                <p class="text-success">IDR 1500</p>
                                <div class="d-flex">
                                    <a href="" class="ml-2 text-primary text-l"><i class="bi bi-bag"></i> Add to
                                        chart</a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-3">
                    <div class="card-box border shadow mb-3">
                        <figure class="figure">
                            <div class="figure-img product-thumbnail-home">
                                <img src="https://images.unsplash.com/photo-1563565375-f3fdfdbefa83?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=464&q=80"
                                    class="figure-img product-thumbnail-home img-fluid rounded" />
                                <a href="" class="d-flex justify-content-center">
                                    <img src="{{ asset('front/img/icon/plus.png') }}" class="align-self-center" />
                                </a>
                            </div>
                            <figcaption class="figure-caption text-left px-2 py-1 m-1">
                                <h5>Paprika</h5>
                                <p class="text-success">IDR 1500</p>
                                <div class="d-flex">
                                    <a href="" class="ml-2 text-primary text-l"><i class="bi bi-bag"></i> Add to
                                        chart</a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>


            </div>
            <div class="row mb-5 mt-4">
                <div class="col-lg-12 text-center">
                    <a href="#" class="btn btn-outline-secondary">Load More</a>
                </div>
            </div>
    </section>
@endsection
