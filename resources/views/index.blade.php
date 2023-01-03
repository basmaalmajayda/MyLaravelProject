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
                    <img class="img-fluid" src="{{asset('img/carousel-1.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3">@lang('lang.header_img')</h5>
                            <h1 class="display-3 text-white mb-md-4">@lang('lang.header1')</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="{{asset('img/carousel-2.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3">@lang('lang.header_img')</h5>
                            <h1 class="display-3 text-white mb-md-4">@lang('lang.header2')</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="{{asset('img/carousel-3.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3">@lang('lang.header_img')</h5>
                            <h1 class="display-3 text-white mb-md-4">@lang('lang.header3')</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->
    
    @include('includes.includeAbout')   

<!-- Services Start -->
<div class="container-fluid pt-5 pb-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-5">
                    <small class="bg-primary text-white text-uppercase font-weight-bold px-1">@lang('lang.yellowService')</small>
                    <h1 class="mt-2 mb-3">@lang('lang.blackService')</h1>
                    <h4 class="font-weight-normal text-muted mb-4">@lang('lang.greyService')</h4>
                    <a href="{{URL::to('/service') }}" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">@lang('lang.discoverService')</a>
                </div>

    @include('includes.includeService', ['services', $services])

    <div>
        {{$services->links()}}
    </div>

    @include('includes.includeTeam', ['teams', $teams])

    <div>
        {{$teams->links()}}
    </div>

    @include('includes.includeFeedback', ['feedbacks', $feedbacks]) 

    <div>
        {{$feedbacks->links()}}
    </div>

    @include('includes.includeBlog', ['blogs', $blogs])

    <div>
        {{$blogs->links()}}
    </div>
@stop