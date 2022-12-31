<!-- Blog Start -->
<div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center">
                <small class="bg-primary text-white text-uppercase font-weight-bold text-center px-1">@lang('lang.yellowBlog')</small>
                <h1 class="mt-2 mb-5">@lang('lang.blackBlog')</h1>
            </div>
            <div class="row">
                @foreach($blogs as $blog)
                <div class="col-md-6 mb-5">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="{{ asset($blog->img) }}" alt="">
                        <div class="position-absolute bg-primary d-flex flex-column align-items-center justify-content-center"
                            style="width: 80px; height: 80px; bottom: 0; left: 0;">
                            <h6 class="text-uppercase mt-2 mb-n2">Jan</h6>
                            <h1 class="m-0">01</h1>
                        </div>
                    </div>
                    <div class="border border-top-0" style="padding: 30px;">
                        <div class="d-flex mb-3">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle" style="width: 40px; height: 40px;" src="{{ asset($blog->img_auther) }}" alt="">
                                <a class="text-muted ml-2" href="{{URL::to('/blogDetails/' . $blog->id ) }}">{{ $blog->auther }}</a>
                            </div>
                            <div class="d-flex align-items-center ml-4">
                                <i class="far fa-bookmark text-primary"></i>
                                <a class="text-muted ml-2" href="{{URL::to('/blogDetails/' . $blog->id ) }}">{{ $blog->title }}</a>
                            </div>
                        </div>
                        <a class="h5 font-weight-bold" href="{{URL::to('/blogDetails/' . $blog->id ) }}">{{ $blog->subject }}</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Blog End -->