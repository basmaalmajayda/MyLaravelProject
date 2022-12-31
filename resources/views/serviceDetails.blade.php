@extends('layouts.main')

@section('content')
@include('includes.include')

    <!-- Services Start -->
    <div class="container-fluid pt-5 pb-3">
        <div class="container">
            <div class="row">

                <div class="row justify-content-center">
                    <div class="col-12 col-lg-6 text-center mb-5">
                        <h2 class="mt-2 mb-3">@lang('lang.ourService')</h2>
                    </div>

                    <div class="col-md-4 mb-5">
                        <div class="d-flex">
                            <i class="fa fa-3x text-primary mr-4"><img style="width: 60%; height: 45%;" src= "{{ asset($service->img) }}" ></i>
                                
                            <div class="d-flex flex-column">
                                <h4 class="font-weight-bold mb-3">{{$service->name}}</h4>
                                <p>{{$service->description}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


@stop