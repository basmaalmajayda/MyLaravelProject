
                <div class="col-lg-8">
                <br>
                    <div class="row" style="margin-left:20px;">
                    @foreach($services as $service)
                        <div class="col-md-6 mb-5">
                            <div class="d-flex">
                                <i class="fa fa-3x text-primary mr-4"><img style="width: 60px; height: 55px;" src="{{ asset($service->img) }}" ></i>
                                <div class="d-flex flex-column">
                                    <h4 class="font-weight-bold mb-3">
                                        {{ session()->get("locale") == "ar" ? $service->name_ar :  $service->name  }}
                                    </h4>
                                    <p>{{ session()->get("locale") == "ar" ? $service->title_ar :  $service->title  }}</p>
                                    <a class="font-weight-semi-bold" href="{{URL::to('/serviceDetails/' . $service->id ) }}">
                                    @lang('lang.readService')
                                <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->