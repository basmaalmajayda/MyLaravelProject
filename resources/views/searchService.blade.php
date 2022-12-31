@extends('layouts.main')

@section('content')
@include('includes.include')

    <!-- Services Start -->
    <div class="container-fluid pt-5 pb-3">
        <div class="container">

        @if($services->isEmpty())
        <div class="row justify-content-center">
                <div class="col-12 col-lg-6 text-center mb-5">
                <h4 class="font-weight-normal text-muted mb-4">There's no services with this name</h4>
            </div>
            </div>
        @else
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6 text-center mb-5">
                    <small class="bg-primary text-white text-uppercase font-weight-bold px-1">What we do</small>
                    <h1 class="mt-2 mb-3">We Offer Creative Services</h1>
                    <h4 class="font-weight-normal text-muted mb-4">Lorem ut kasd dolores elitr sed est duo ea ipsum
                        justo diam, est erat lorem. Est magna sea clita diam tempor elitr</h4>
                </div>
            </div>
        @endif

            <div class="row">
            @foreach($services as $service)
                <div class="col-md-4 mb-5">
                    <div class="d-flex">
                    <i class="fa fa-3x text-primary mr-4"><img style="width: 60%; height: 45%;" src= "{{ asset( $service->img) }}" ></i>
                        <div class="d-flex flex-column">
                            <h4 class="font-weight-bold mb-3">{{ $service->name }}</h4>
                            <p>{{ $service->description}}</p>
                            <a class="font-weight-semi-bold" href="">
                                Read More 
                                <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div> 
                @endforeach
            </div>
        </div>
    </div>
    <!-- Services End -->
@stop

