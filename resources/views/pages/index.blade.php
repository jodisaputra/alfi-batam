@extends('layouts/frontend')

@section('content')
    <section class="pt-3 pb-3 mb-2 card-grid">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tiny-slider arrow-hover arrow-blur arrow-white arrow-round rounded-3 overflow-hidden">
                        <div class="tiny-slider-inner" data-autoplay="true" data-hoverpause="true" data-gutter="1"
                            data-arrow="true" data-dots="false" data-items="1">
                            <!-- Slide 1 -->
                            <div class="card bg-dark-overlay-3 h-400 h-sm-500 h-md-600 rounded-0"
                                style="background-image:url({{ asset('frontend') }}/assets/images/blog/16by9/05.jpg); background-position: center left; background-size: cover;">
                                <!-- Card Image overlay -->
                                <div class="card-img-overlay d-flex align-items-center p-3 p-sm-5">
                                    <div class="w-100 my-auto">
                                        <div class="col-md-10 col-lg-7 mx-auto text-center">
                                            <!-- Card category -->
                                            <a href="#" class="badge bg-primary mb-2"><i
                                                    class="fas fa-circle me-2 small fw-bold"></i>Business</a>
                                            <!-- Card title -->
                                            <h2 class="text-white display-5"><a href="post-single-2.html"
                                                    class="btn-link text-reset fw-normal">Never underestimate the
                                                    influence of social media</a></h2>
                                            <p class="text-white">For who thoroughly her boy estimating conviction.
                                                Removed demands expense account in outward tedious do.</p>
                                            <!-- Card info -->
                                            <ul
                                                class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block">
                                                <li class="nav-item">
                                                    <div class="nav-link">
                                                        <div class="d-flex align-items-center text-white position-relative">
                                                            <div class="avatar avatar-sm">
                                                                <img class="avatar-img rounded-circle"
                                                                    src="{{ asset('frontend') }}/assets/images/avatar/14.jpg"
                                                                    alt="avatar">
                                                            </div>
                                                            <span class="ms-3">by <a href="#"
                                                                    class="stretched-link text-reset btn-link">Carolyn</a></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item">Jan 26, 2022</li>
                                                <li class="nav-item"><a href="#" class="btn-link"><i
                                                            class="far fa-comment-alt me-1"></i> 5 Comments</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide 2 -->
                            <div class="card bg-dark-overlay-3 h-400 h-sm-500 h-md-600 rounded-0"
                                style="background-image:url({{ asset('frontend') }}/assets/images/blog/16by9/02.jpg); background-position: center left; background-size: cover;">
                                <!-- Card Image overlay -->
                                <div class="card-img-overlay d-flex align-items-center p-3 p-sm-5">
                                    <div class="w-100 my-auto">
                                        <div class="col-md-10 col-lg-7 mx-auto text-center">
                                            <!-- Card category -->
                                            <a href="#" class="badge text-bg-danger mb-2"><i
                                                    class="fas fa-circle me-2 small fw-bold"></i>Lifestyle</a>
                                            <!-- Card title -->
                                            <h2 class="text-white display-5"><a href="post-single-2.html"
                                                    class="btn-link text-reset fw-normal">This is why this year
                                                    will
                                                    be the year of startups</a></h2>
                                            <p class="text-white">Particular way thoroughly unaffected projection
                                                favorable Mrs can be projecting own. </p>
                                            <!-- Card info -->
                                            <ul
                                                class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block">
                                                <li class="nav-item">
                                                    <div class="nav-link">
                                                        <div class="d-flex align-items-center text-white position-relative">
                                                            <div class="avatar avatar-sm">
                                                                <img class="avatar-img rounded-circle"
                                                                    src="{{ asset('frontend') }}/assets/images/avatar/10.jpg"
                                                                    alt="avatar">
                                                            </div>
                                                            <span class="ms-3">by <a href="#"
                                                                    class="stretched-link text-reset btn-link">Louis</a></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item">Nov 15, 2022</li>
                                                <li class="nav-item"><a href="#" class="btn-link"><i
                                                            class="far fa-comment-alt me-1"></i> 3 Comments</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="p-0">
        <div class="container">
            <div class="row mt-4 mb-2">
                <h1>Berita</h1>
            </div>
            <div class="row g-4">
                <x-blog-card></x-blog-card>
                <x-blog-card></x-blog-card>
                <x-blog-card></x-blog-card>
                <x-blog-card></x-blog-card>
                <x-blog-card></x-blog-card>
                <x-blog-card></x-blog-card>
            </div>
        </div>
    </section>

    <section class="py-3 my-2">
        <div class="container">
            <div class="row">
                <div class="col">
                    <a href="#" class="d-block card-img-flash  rounded-3 overflow-hidden">
                        <img src="{{ asset('frontend') }}/assets/images/adv-3.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="p-0">
        <div class="container">
            <div class="row">
                <div class="col">
                    <!-- Slider -->
                    <div class="tiny-slider arrow-hover arrow-dark arrow-round">
                        <div class="tiny-slider-inner" data-autoplay="false" data-hoverpause="true" data-gutter="24"
                            data-arrow="true" data-dots="false" data-items-xl="5" data-items-lg="4" data-items-md="3"
                            data-items-sm="2" data-items-xs="2">
                            <!-- Category item -->
                            <div>
                                <div class="card card-overlay-bottom card-img-scale">
                                    <img class="card-img" src="{{ asset('frontend') }}/assets/images/blog/1by1/thumb/01.jpg"
                                        alt="card image">
                                    <div class="card-img-overlay d-flex px-3 px-sm-5">
                                        <h5 class="mt-auto mx-auto">
                                            <a href="#"
                                                class="stretched-link btn-link fw-bold text-white">Travel</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <!-- Category item -->
                            <div>
                                <div class="card card-overlay-bottom card-img-scale">
                                    <img class="card-img"
                                        src="{{ asset('frontend') }}/assets/images/blog/1by1/thumb/02.jpg"
                                        alt="card image">
                                    <div class="card-img-overlay d-flex px-3 px-sm-5">
                                        <h5 class="mt-auto mx-auto">
                                            <a href="#"
                                                class="stretched-link btn-link fw-bold text-white">Business</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <!-- Category item -->
                            <div>
                                <div class="card card-overlay-bottom card-img-scale">
                                    <img class="card-img"
                                        src="{{ asset('frontend') }}/assets/images/blog/1by1/thumb/03.jpg"
                                        alt="card image">
                                    <div class="card-img-overlay d-flex px-3 px-sm-5">
                                        <h5 class="mt-auto mx-auto">
                                            <a href="#"
                                                class="stretched-link btn-link fw-bold text-white">Marketing</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <!-- Category item -->
                            <div>
                                <div class="card card-overlay-bottom card-img-scale">
                                    <img class="card-img"
                                        src="{{ asset('frontend') }}/assets/images/blog/1by1/thumb/04.jpg"
                                        alt="card image">
                                    <div class="card-img-overlay d-flex px-3 px-sm-5">
                                        <h5 class="mt-auto mx-auto">
                                            <a href="#"
                                                class="stretched-link btn-link fw-bold text-white">Photography</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <!-- Category item -->
                            <div>
                                <div class="card card-overlay-bottom card-img-scale">
                                    <img class="card-img"
                                        src="{{ asset('frontend') }}/assets/images/blog/1by1/thumb/05.jpg"
                                        alt="card image">
                                    <div class="card-img-overlay d-flex px-3 px-sm-5">
                                        <h5 class="mt-auto mx-auto">
                                            <a href="#"
                                                class="stretched-link btn-link fw-bold text-white">Sports</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Slider END -->
                </div>
            </div>
        </div>
    </section>
@endsection
