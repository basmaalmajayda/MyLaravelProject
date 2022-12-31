
                <div class="col-lg-8">
                    <div class="row">
                    @foreach($services as $service)
                        <div class="col-md-6 mb-5">
                            <div class="d-flex">
                                
                                <i class="fa fa-3x text-primary mr-4"><img style="width: 55%; height: 40%;" src="{{ asset($service->img) }}" ></i>
                                <div class="d-flex flex-column">
                                    <h4 class="font-weight-bold mb-3">{{ $service->name }}</h4>
                                    <p>{{ $service->description}}</p>
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