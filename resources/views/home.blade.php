@extends('layouts.main')

@section('content')

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                <li data-target="#header-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3">Creative Agency</h5>
                            <h1 class="display-3 text-white mb-md-4">Creative Services For Brands Grow</h1>
                            <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3">Creative Agency</h5>
                            <h1 class="display-3 text-white mb-md-4">Highly Professional Team Members</h1>
                            <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="img/carousel-3.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3">Creative Agency</h5>
                            <h1 class="display-3 text-white mb-md-4">Happy Clients & Positive Reviews</h1>
                            <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->



    <!-- Services Start -->
    <div class="container-fluid pt-5 pb-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-5">
                    <small class="bg-primary text-white text-uppercase font-weight-bold px-1">What we do</small>
                    <h1 class="mt-2 mb-3">We Offer Creative Services</h1>
                    <h4 class="font-weight-normal text-muted mb-4">Lorem ut kasd dolores elitr sed est duo ea ipsum justo diam, est erat lorem. Est magna sea clita diam tempor elitr</h4>
                    <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">Discover More</a>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-6 mb-5">
                            <div class="d-flex">
                                <i class="fa fa-3x fa-laptop-code text-primary mr-4"></i>
                                <div class="d-flex flex-column">
                                    <h4 class="font-weight-bold mb-3">Web Design</h4>
                                    <p>Et kasd justo clita amet kasd, vero amet vero eos kasd diam justo, ipsum diam sed elitr erat</p>
                                    <a class="font-weight-semi-bold" href="">Read More <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-5">
                            <div class="d-flex">
                                <i class="fa fa-3x fa-code text-primary mr-4"></i>
                                <div class="d-flex flex-column">
                                    <h4 class="font-weight-bold mb-3">Development</h4>
                                    <p>Et kasd justo clita amet kasd, vero amet vero eos kasd diam justo, ipsum diam sed elitr erat</p>
                                    <a class="font-weight-semi-bold" href="">Read More <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-5">
                            <div class="d-flex">
                                <i class="fa fa-3x fa-envelope-open-text text-primary mr-4"></i>
                                <div class="d-flex flex-column">
                                    <h4 class="font-weight-bold mb-3">Marketing</h4>
                                    <p>Et kasd justo clita amet kasd, vero amet vero eos kasd diam justo, ipsum diam sed elitr erat</p>
                                    <a class="font-weight-semi-bold" href="">Read More <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-5">
                            <div class="d-flex">
                                <i class="fa fa-3x fa-chart-line text-primary mr-4"></i>
                                <div class="d-flex flex-column">
                                    <h4 class="font-weight-bold mb-3">Strategy</h4>
                                    <p>Et kasd justo clita amet kasd, vero amet vero eos kasd diam justo, ipsum diam sed elitr erat</p>
                                    <a class="font-weight-semi-bold" href="">Read More <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Pricing Plan Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-md-6 mb-5">
                            <div class="d-flex flex-column align-items-center justify-content-center bg-primary p-4">
                                <h3>Basic</h3>
                                <h1 class="display-4 mb-0">
                                    <small class="align-top"
                                        style="font-size: 22px; line-height: 45px;">$</small>49<small
                                        class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                        Mo</small>
                                </h1>
                            </div>
                            <div class="border border-top-0 d-flex flex-column align-items-center py-4">
                                <p>HTML5 & CSS3</p>
                                <p>Bootstrap 4</p>
                                <p>Responsive Layout</p>
                                <p>Compatible With All Browsers</p>
                                <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold my-2">Order Now</a>
                            </div>
                        </div>
                        <div class="col-md-6 mb-5">
                            <div class="d-flex flex-column align-items-center justify-content-center bg-primary p-4">
                                <h3>Premium</h3>
                                <h1 class="display-4 mb-0">
                                    <small class="align-top"
                                        style="font-size: 22px; line-height: 45px;">$</small>99<small
                                        class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                        Mo</small>
                                </h1>
                            </div>
                            <div class="border border-top-0 d-flex flex-column align-items-center py-4">
                                <p>HTML5 & CSS3</p>
                                <p>Bootstrap 4</p>
                                <p>Responsive Layout</p>
                                <p>Compatible With All Browsers</p>
                                <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold my-2">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 mb-5">
                    <small class="d-inline bg-primary text-white text-uppercase font-weight-bold px-1">Our Pricing Plan</small>
                    <h1 class="mt-2 mb-3">We Offer Affordable and Flexible Packages</h1>
                    <h4 class="font-weight-normal text-muted mb-4">Lorem ut kasd dolores elitr sed est duo ea ipsum justo diam, est erat lorem. Est magna sea clita diam tempor elitr</h4>
                    <h5 class="font-weight-bold mb-4">Need A Custom Package?</h5>
                    <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">Contact Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->


    <!-- Testimonial Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-5">
                    <small class="bg-primary text-white text-uppercase font-weight-bold px-1">What clients say</small>
                    <h1 class="mt-2 mb-3">Clients Say About Our Services</h1>
                    <h4 class="font-weight-normal text-muted mb-4">Lorem ut kasd elitr sed est duo ea ipsum justo diam, est erat lorem clita diam elitr</h4>
                    <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">Submit Review</a>
                </div>
                <div class="col-lg-8 mb-5">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item">
                            <div class="testimonial-text position-relative border mb-4" style="padding: 25px 30px;">
                                Sed ea amet kasd elitr stet nonumy, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolores tempor voluptua ipsum sanctus clita
                            </div>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid rounded-circle" src="img/testimonial-1.jpg" style="width: 80px; height: 80px;" alt="Image">
                                <div class="pl-4">
                                    <h6 class="font-weight-bold">Client Name</h6>
                                    <i class="text-muted">Profession</i>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="testimonial-text position-relative border mb-4" style="padding: 25px 30px;">
                                Sed ea amet kasd elitr stet nonumy, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolores tempor voluptua ipsum sanctus clita
                            </div>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid rounded-circle" src="img/testimonial-2.jpg" style="width: 80px; height: 80px;" alt="Image">
                                <div class="pl-4">
                                    <h6 class="font-weight-bold">Client Name</h6>
                                    <i class="text-muted">Profession</i>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="testimonial-text position-relative border mb-4" style="padding: 25px 30px;">
                                Sed ea amet kasd elitr stet nonumy, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolores tempor voluptua ipsum sanctus clita
                            </div>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid rounded-circle" src="img/testimonial-3.jpg" style="width: 80px; height: 80px;" alt="Image">
                                <div class="pl-4">
                                    <h6 class="font-weight-bold">Client Name</h6>
                                    <i class="text-muted">Profession</i>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="testimonial-text position-relative border mb-4" style="padding: 25px 30px;">
                                Sed ea amet kasd elitr stet nonumy, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolores tempor voluptua ipsum sanctus clita
                            </div>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid rounded-circle" src="img/testimonial-4.jpg" style="width: 80px; height: 80px;" alt="Image">
                                <div class="pl-4">
                                    <h6 class="font-weight-bold">Client Name</h6>
                                    <i class="text-muted">Profession</i>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="testimonial-text position-relative border mb-4" style="padding: 25px 30px;">
                                Sed ea amet kasd elitr stet nonumy, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolores tempor voluptua ipsum sanctus clita
                            </div>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid rounded-circle" src="img/testimonial-5.jpg" style="width: 80px; height: 80px;" alt="Image">
                                <div class="pl-4">
                                    <h6 class="font-weight-bold">Client Name</h6>
                                    <i class="text-muted">Profession</i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center">
                <small class="bg-primary text-white text-uppercase font-weight-bold text-center px-1">Our Blog</small>
                <h1 class="mt-2 mb-5">Latest From Blog</h1>
            </div>
            <div class="row">
                <div class="col-md-6 mb-5">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/blog-1.jpg" alt="">
                        <div class="position-absolute bg-primary d-flex flex-column align-items-center justify-content-center"
                            style="width: 80px; height: 80px; bottom: 0; left: 0;">
                            <h6 class="text-uppercase mt-2 mb-n2">Jan</h6>
                            <h1 class="m-0">01</h1>
                        </div>
                    </div>
                    <div class="border border-top-0" style="padding: 30px;">
                        <div class="d-flex mb-3">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle" style="width: 40px; height: 40px;" src="img/user.jpg" alt="">
                                <a class="text-muted ml-2" href="">John Doe</a>
                            </div>
                            <div class="d-flex align-items-center ml-4">
                                <i class="far fa-bookmark text-primary"></i>
                                <a class="text-muted ml-2" href="">Web Design</a>
                            </div>
                        </div>
                        <a class="h5 font-weight-bold" href="">Kasd tempor diam sea justo dolor kasd amet dolor labore amet clita est diam dolor</a>
                    </div>
                </div>
                <div class="col-md-6 mb-5">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/blog-2.jpg" alt="">
                        <div class="position-absolute bg-primary d-flex flex-column align-items-center justify-content-center"
                            style="width: 80px; height: 80px; bottom: 0; left: 0;">
                            <h6 class="text-uppercase mt-2 mb-n2">Jan</h6>
                            <h1 class="m-0">01</h1>
                        </div>
                    </div>
                    <div class="border border-top-0" style="padding: 30px;">
                        <div class="d-flex mb-3">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle" style="width: 40px; height: 40px;" src="img/user.jpg" alt="">
                                <a class="text-muted ml-2" href="">John Doe</a>
                            </div>
                            <div class="d-flex align-items-center ml-4">
                                <i class="far fa-bookmark text-primary"></i>
                                <a class="text-muted ml-2" href="">Web Design</a>
                            </div>
                        </div>
                        <a class="h5 font-weight-bold" href="">Kasd tempor diam sea justo dolor kasd amet dolor labore amet clita est diam dolor</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->

@stop