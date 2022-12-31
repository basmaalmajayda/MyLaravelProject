<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    

</head>

<body>
<!-- Navbar Start -->
<div class="container-fluid nav-bar p-0">
        <div class="container-lg p-0">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark">
                <a href="{{URL::to('/')}}" class="navbar-brand">
                    <h1 class="m-0 text-white display-4"><span class="text-primary">@lang('lang.d')</span>@lang('lang.ot')<span class="text-primary">@lang('lang.c')</span>@lang('lang.om')</h1>
                </a>

                <a class="nav-item nav-link" href="{{URL::to('/lang/' . 'en')}}">@lang('lang.en')</a>
                <a class="nav-item nav-link" href="{{URL::to('/lang/' . 'ar')}}">@lang('lang.ar')</a>
                
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    
                    <form class="example" method="post" action="{{URL::to('/searchService')}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">  
                    <input type="text" style="font-size:14px;" placeholder="@lang('lang.search')" name="name">
                    <button type="submit" style="height: 44px; width:37px;"><i class="fa fa-search"></i></button>
                    </form>

                    <a class="nav-item nav-link"></a>
                    <div class="navbar-nav ml-auto py-0">
                        <a href="{{URL::to('/')}}" class="nav-item nav-link">@lang('lang.home')</a>
                        <a href="{{URL::to('/service')}}" class="nav-item nav-link">@lang('lang.services')</a>
                        <a href="{{URL::to('/blog')}}" class="nav-item nav-link">@lang('lang.blogs')</a>
                        <a href="{{URL::to('/about')}}" class="nav-item nav-link">@lang('lang.about')</a>
                        <a href="{{URL::to('/contact')}}" class="nav-item nav-link">@lang('lang.contact')</a>
                        <a href="{{URL::to('/login')}}" class="nav-item nav-link active login">@lang('lang.login')</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    @yield('content');

    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-white mt-5 pt-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="index.html" class="navbar-brand">
                    <h1 class="m-0 mt-n2 text-white display-4"><span class="text-primary">@lang('lang.d')</span>@lang('lang.ot')<span class="text-primary">@lang('lang.c')</span>@lang('lang.om')</h1>
                </a>
                <p>@lang('lang.whiteFooter')</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="font-weight-bold text-primary mb-4">@lang('lang.quick')</h5>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="{{URL::to('/index')}}"><i class="fa fa-angle-right text-primary mr-2"></i>@lang('lang.home')</a>
                    <a class="text-white mb-2" href="{{URL::to('/service')}}"><i class="fa fa-angle-right text-primary mr-2"></i>@lang('lang.services')</a>
                    <a class="text-white mb-2" href="{{URL::to('/blog')}}"><i class="fa fa-angle-right text-primary mr-2"></i>@lang('lang.blogs')</a>
                    <a class="text-white mb-2" href="{{URL::to('/about')}}"><i class="fa fa-angle-right text-primary mr-2"></i>@lang('lang.aboutFooter')</a>
                    <a class="text-white" href="{{URL::to('/contact')}}"><i class="fa fa-angle-right text-primary mr-2"></i>@lang('lang.contactFooter')</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="font-weight-bold text-primary mb-4">@lang('lang.popular')</h5>
                <div class="d-flex flex-column justify-content-start">
                <a class="text-white mb-2" href="{{URL::to('/index')}}"><i class="fa fa-angle-right text-primary mr-2"></i>@lang('lang.home')</a>
                <a class="text-white mb-2" href="{{URL::to('/service')}}"><i class="fa fa-angle-right text-primary mr-2"></i>@lang('lang.services')</a>
                <a class="text-white mb-2" href="{{URL::to('/blog')}}"><i class="fa fa-angle-right text-primary mr-2"></i>@lang('lang.blogs')</a>
                <a class="text-white mb-2" href="{{URL::to('/about')}}"><i class="fa fa-angle-right text-primary mr-2"></i>@lang('lang.aboutFooter')</a>
                <a class="text-white" href="{{URL::to('/contact')}}"><i class="fa fa-angle-right text-primary mr-2"></i>@lang('lang.contactFooter')</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="font-weight-bold text-primary mb-4">@lang('lang.touch')</h5>
                <p>@lang('lang.address')</p>
                <p><i class="fa fa-map-marker-alt text-primary mr-2"></i>@lang('lang.street')</p>
                <p><i class="fa fa-phone-alt text-primary mr-2"></i>+012 345 67890</p>
                <p><i class="fa fa-envelope text-primary mr-2"></i>info@example.com</p>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4 px-sm-3 px-md-5">
        <p class="m-0 text-center">
            &copy; <a class="font-weight-semi-bold" href="{{URL::to('/')}}">@lang('lang.logo')</a>. @lang('lang.rights')
            
        </p>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="{{URL::to('/')}}" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Contact Javascript File -->
    <script src="{{asset('mail/jqBootstrapValidation.min.js')}}"></script>
    <script src="{{asset('mail/contact.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('js/main.js')}}"></script>
    </body>

</html>