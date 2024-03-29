@extends('layouts.mainDashboard')
@section('content')

@include('includes.includeAddStatus')

@include('includes.includeErrors')

<section class="section main-section">
    <div class="card mb-6"> 
      <div class="card-content">
      <form method="post" enctype="multipart/form-data" action="{{ URL::to('/storeService') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="field">
            <label class="label">Service Name</label>
            <div class="field-body">
              <div class="field">
                <div class="control icons-left">
                  <input class="input" type="text" placeholder="Service name" name="name">
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
                  <input class="input" type="text" placeholder="Arabic Service name" name="name_ar">
                  <span class="icon left"><i class="mdi mdi-account"></i></span>
                </div>
              </div>
            </div>
          </div>          
          <hr>
          <div class="field">
            <label class="label">Title</label>
            <div class="control">
              <textarea class="textarea" placeholder="Title" name="title"></textarea>
            </div>
          </div>
          <hr>
          <div class="field">
            <label class="label">Arabic Title</label>
            <div class="control">
              <textarea class="textarea" placeholder="Arabic Title" name="title_ar"></textarea>
            </div>
          </div>
          <hr>
          <div class="field">
            <label class="label">Description</label>
            <div class="control">
              <textarea class="textarea" placeholder="Description" name="description"></textarea>
            </div>
          </div>
          <hr>
          <div class="field">
            <label class="label">Arabic Description</label>
            <div class="control">
              <textarea class="textarea" placeholder="Arabic Description" name="description_ar"></textarea>
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
