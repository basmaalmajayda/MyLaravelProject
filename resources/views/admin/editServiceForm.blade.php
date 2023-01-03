@extends('layouts.mainDashboard')
@section('content')
<section class="section main-section">

@include('includes.includeEditStatus')

@include('includes.includeErrors')

<section class="section main-section">
    <div class="card mb-6"> 
      <div class="card-content">
      <form method="post" enctype="multipart/form-data" action="{{ URL::to('updateService') }}">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input type="hidden" name="id" value="{{ $service->id }}">
          <div class="field">
            <label class="label">Service Name</label>
            <div class="field-body">
              <div class="field">
                <div class="control icons-left">
                  <input class="input" type="text" name="name" value="{{ $service->name }}">
                  <span class="icon left"><i class="mdi mdi-account"></i></span>
                </div>
              </div>
            </div>
          </div>          
          <hr>
          <div class="field">
            <label class="label">Arabic Service Name</label>
            <div class="field-body">
              <div class="field">
                <div class="control icons-left">
                  <input class="input" type="text" name="name_ar" value="{{ $service->name_ar }}">
                  <span class="icon left"><i class="mdi mdi-account"></i></span>
                </div>
              </div>
            </div>
          </div>          
          <hr>
          <div class="field">
            <label class="label">Title</label>
            <div class="control">
              <textarea class="textarea" name="title" placeholder="{{ $service->title }}"></textarea>
            </div>
          </div>
          <hr>
          <div class="field">
            <label class="label">Arabic Title</label>
            <div class="control">
              <textarea class="textarea" name="title_ar" placeholder="{{ $service->title_ar }}"></textarea>
            </div>
          </div>
          <hr>
          <div class="field">
            <label class="label">Description</label>
            <div class="control">
              <textarea class="textarea" name="description" placeholder="{{ $service->description }}"></textarea>
            </div>
          </div>
          <hr>
          <div class="field">
            <label class="label">Arabic Description</label>
            <div class="control">
              <textarea class="textarea" name="description_ar" placeholder="{{ $service->description_ar }}"></textarea>
            </div>
          </div>
          <hr>
          <div class="field">
          <label class="label">Service image</label>
          <div class="field-body">
            <div class="field file">
              <input type="file" name="img">
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
