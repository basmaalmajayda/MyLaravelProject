@extends('layouts.main')

@section('content')
@include('includes.include')

    <!-- Services Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center">
                <small style="font-size: 22px;" class="bg-primary text-white text-uppercase font-weight-bold text-center px-1">
                    @lang('lang.ourService')
                </small>
                <br><br><br><br>
            </div>
            <div class="row">
                <div class="col-md-6 mb-5">
                    <div class="position-relative">
                        <img style="width: 100px; hieght: 95px;" src= "{{ asset($service->img) }}" alt="">
                    </div>
                    <div class="border border-top-0" style="padding: 30px;">
                        <div class="d-flex mb-3">
                            <div class="d-flex align-items-center">
                                <a class="text-muted ml-2">
                                {{ session()->get("locale") == "ar" ? $service->name_ar :  $service->name  }}
                                </a>
                            </div>
                        </div>
                            <p class="h5 font-weight-bold" >
                                {{ session()->get("locale") == "ar" ? $service->title_ar :  $service->title  }}
                            </p>
                    </div>
                </div>
                <div class="col-md-6 mb-5">
                    <div class="position-relative">
                    </div>
                    <div class="border" style="padding: 30px;">
                        <div class="d-flex mb-3">
                            <p>{{ session()->get("locale") == "ar" ? $service->description_ar :  $service->description  }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->

@stop

