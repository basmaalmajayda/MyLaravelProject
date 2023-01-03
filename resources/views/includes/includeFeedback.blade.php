<!-- Testimonial Start -->
<div class="container-fluid pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-5">
                    <small class="bg-primary text-white text-uppercase font-weight-bold px-1">@lang('lang.yellowFeedback')</small>
                    <h1 class="mt-2 mb-3">@lang('lang.blackFeedback')</h1>
                    <h4 class="font-weight-normal text-muted mb-4">@lang('lang.greyFeedback')</h4>
                    <a href="{{URL::to('/contact') }}" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">@lang('lang.discoverFeedback')</a>
                </div>
                <div class="col-lg-8 mb-5">
                    <div class="owl-carousel testimonial-carousel">
                        @foreach($feedbacks as $feedback)
                        <div class="testimonial-item">
                            <div class="testimonial-text position-relative border mb-4" style="padding: 25px 30px;">
                            {{ session()->get("locale") == "ar" ? $feedback->message_ar :  $feedback->message  }}
                            </div>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid rounded-circle" src="{{ asset($feedback->img) }}" style="width: 80px; height: 80px;" alt="Image">
                                <div class="pl-4">
                                    <h6 class="font-weight-bold">
                                    {{ session()->get("locale") == "ar" ? $feedback->name_ar :  $feedback->name  }}
                                    </h6>
                                    <i class="text-muted">
                                    {{ session()->get("locale") == "ar" ? $feedback->profession_ar :  $feedback->profession  }}
                                    </i>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->