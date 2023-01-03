@extends('layouts.main')

@section('content')
@include('includes.include')

    <!-- Blog Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center">
                <small style="font-size: 22px;" class="bg-primary text-white text-uppercase font-weight-bold text-center px-1">@lang('lang.ourBlog')</small>
                <br><br><br><br>
            </div>
            <div class="row">
                <div class="col-md-6 mb-5">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src= "{{ asset($blog->img) }}" alt="">
                    </div>
                    <div class="border border-top-0" style="padding: 30px;">
                        <div class="d-flex mb-3">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle" style="width: 40px; height: 40px;" src= "{{ asset( $blog->img_auther) }}" alt="">
                                <a class="text-muted ml-2">{{ $blog->auther }}</a>
                            </div>
                            <div class="d-flex align-items-center ml-4">
                                <i class="far fa-bookmark text-primary"></i>
                                <a class="text-muted ml-2">{{ $blog->title }}</a>
                            </div>
                        </div>
                            <p class="h5 font-weight-bold" >{{ $blog->subject }}</p>
                    </div>
                </div>
                <div class="col-md-6 mb-5">
                    <div class="position-relative">
                    </div>
                    <div class="border" style="padding: 30px;">
                        <div class="d-flex mb-3">
                            <p>{{ $blog->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->

@stop