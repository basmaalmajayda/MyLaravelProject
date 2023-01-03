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
                        
                    </div>
                    <div class="border border-top-0" style="padding: 30px;">
                        <div class="d-flex mb-3">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle" style="width: 40px; height: 40px;" src="{{ asset($blog->img_auther) }}" alt="">
                                <a class="text-muted ml-2" href="{{URL::to('/blogDetails/' . $blog->id ) }}">{{ session()->get("locale") == "ar" ? $blog->auther_ar :  $blog->auther  }}</a>
                                <h3>{{ session()->get("locale") == "ar" ? $blog->name_ar :  $blog->name }}</h3>
                            </div>
                            <div class="d-flex align-items-center ml-4">
                                <i class="far fa-bookmark text-primary"></i>
                                <a class="text-muted ml-2" href="{{URL::to('/blogDetails/' . $blog->id ) }}">{{ session()->get("locale") == "ar" ? $blog->title_ar :  $blog->title  }}</a>
                            </div>
                        </div>
                        <a class="h5 font-weight-bold" href="{{URL::to('/blogDetails/' . $blog->id ) }}">{{ session()->get("locale") == "ar" ? $blog->subject_ar :  $blog->subject  }}</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Blog End -->