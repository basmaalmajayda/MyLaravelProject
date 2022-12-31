@extends('layouts.mainDashboard')
@section('content')

@include('includes.includeEditStatus')

@include('includes.includeErrors')

<section class="section main-section">
    <div class="card mb-6"> 
      <div class="card-content">
      <form method="post" enctype="multipart/form-data" action="{{ URL::to('updateBlog') }}">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input type="hidden" name="id" value="{{ $blog->id }}">
          <div class="field">
            <label class="label">Blog</label>
            <div class="field-body">
              <div class="field">
                <div class="control icons-left">
                  <input class="input" type="text" name="title" value="{{ $blog->title }}">
                  <span class="icon left"><i class="mdi mdi-account"></i></span>
                </div>
              </div>
            </div>
          </div>          
          <hr>
          <div class="field">
            <label class="label">Auther</label>
            <div class="field-body">
              <div class="field">
                <div class="control icons-left">
                  <input class="input" type="text" name="auther" value="{{ $blog->auther }}">
                  <span class="icon left"><i class="mdi mdi-account"></i></span>
                </div>
              </div>
            </div>
          </div>          
          <hr>
          <div class="field">
            <label class="label">Subject</label>
            <div class="field-body">
              <div class="field">
                <div class="control icons-left">
                  <input class="input" type="text" name="subject" value="{{ $blog->subject }}">
                  <span class="icon left"><i class="mdi mdi-account"></i></span>
                </div>
              </div>
            </div>
          </div>          
          <hr>
          <div class="field">
            <label class="label">Description</label>
            <div class="control">
              <textarea class="textarea" name="description" value="{{ $blog->description }}"></textarea>
            </div>
          </div>
          <hr>
          <div class="field">
          <label class="label">Blog image</label>
          <div class="field-body">
            <div class="field file">
              <input type="file" name="img">
            </div>
          </div>
        </div>
        <hr>
        <div class="field">
          <label class="label">Auther image</label>
          <div class="field-body">
            <div class="field file">
              <input type="file" name="img_auther">
            </div>
          </div>
        </div>
        <hr>
          <div class="field grouped">
            <div class="control">
              <button type="submit" class="button green">
                Submit
              </button>
            </div>
            <div class="control">
              <button type="reset" class="button red">
                Reset
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
@stop
