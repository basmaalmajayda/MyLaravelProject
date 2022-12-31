@extends('layouts.main')

@section('content')
@include('includes.include')

<!-- Services Start -->
<div class="container-fluid pt-5 pb-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-5">
                    <small class="bg-primary text-white text-uppercase font-weight-bold px-1">@lang('lang.yellowService')</small>
                    <h1 class="mt-2 mb-3">@lang('lang.blackService')</h1>
                    <h4 class="font-weight-normal text-muted mb-4">@lang('lang.loremServicePage')</h4>
                    </div>

    @include('includes.includeService', ['services', $services]) 
    <div>
    {{$services->links()}}
    </div>
@stop