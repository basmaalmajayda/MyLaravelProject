    
        <!-- Team Start -->
        <div class="container-fluid pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-5">
                    <small class="bg-primary text-white text-uppercase font-weight-bold px-1">@lang('lang.yellowTeam')</small>
                    <h1 class="mt-2 mb-3">@lang('lang.blackTeam')</h1>
                    <h4 class="font-weight-normal text-muted mb-4">@lang('lang.greyTeam')</h4>
                    <a href="{{URL::to('/about')}}" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">@lang('lang.discoverTeam')</a>
                </div>
                
                <div class="col-lg-8 mb-5">
                    <div class="owl-carousel team-carousel">
                    @foreach($teams as $team)
                        <div class="team-item">
                            <div class="position-relative">
                                <img style="width: 223px; height: 250px;" src="{{ asset($team->img) }}" >    
                                <div class="team-overlay position-absolute d-flex align-items-center justify-content-center m-3">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <a class="btn btn-outline-secondary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-outline-secondary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-outline-secondary rounded-circle text-center px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="border border-top-0 text-center" style="padding: 30px;">
                                <h5 class="font-weight-bold">{{ $team-> name}}</h5>
                                <span>{{$team-> job}}</span>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>   
            </div>
        </div>
    </div>
    <!-- Team End -->
