@extends('layouts.main')

@section('content')
@include('includes.include')


@if(session()->has('status'))
@if(session('status'))
<div style="color:#09AC60; padding:20px; background-color:#BEBEBE; font-weight:bold;" > Sent successfully </div>
@else
<div style="color:#D90B0B; padding:20px; background-color:#BEBEBE; font-weight:bold;" > Sent Failed </div>
@endif
@endif

    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center">
                <small class="bg-primary text-white text-uppercase font-weight-bold text-center px-1">@lang('lang.yellowContactPage')</small>
                <h1 class="mt-2 mb-5">@lang('lang.blackContactPage')</h1>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="d-flex align-items-center border mb-3 p-4">
                        <i class="fa fa-2x fa-map-marker-alt text-primary mr-3"></i>
                        <div class="d-flex flex-column">
                            <h5 class="font-weight-bold">@lang('lang.office')</h5>
                            <p class="m-0">@lang('lang.street')</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border mb-3 p-4">
                        <i class="fa fa-2x fa-envelope-open text-primary mr-3"></i>
                        <div class="d-flex flex-column">
                            <h5 class="font-weight-bold">@lang('lang.emailus')</h5>
                            <p class="m-0">info@example.com</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border mb-3 mb-md-0 p-4">
                        <i class="fas fa-2x fa-phone-alt text-primary mr-3"></i>
                        <div class="d-flex flex-column">
                            <h5 class="font-weight-bold">@lang('lang.phone')</h5>
                            <p class="m-0">+012 345 6789</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form action="{{URL::to('/storeContact')}}" method="post" novalidate="novalidate">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                        <div class="form-row">
                                <div class="col-md-6">
                                    <div class="control-group">
                                        <input type="text" class="form-control p-4" name="name" placeholder="@lang('lang.name')" required="required" data-validation-required-message="Please enter your name" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="control-group">
                                        <input type="email" class="form-control p-4" name="email" placeholder="@lang('lang.email')" required="required" data-validation-required-message="Please enter your email" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control p-4" name="subject" placeholder="@lang('lang.subject')" required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control" rows="5" name="message" placeholder="@lang('lang.message')" required="required" data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-primary font-weight-semi-bold px-4" style="height: 50px;" type="submit" >@lang('lang.send')</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    @stop