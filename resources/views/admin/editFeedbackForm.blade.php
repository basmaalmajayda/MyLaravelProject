@extends('layouts.mainDashboard')
@section('content')

@include('includes.includeEditStatus')

@include('includes.includeErrors')

<section class="section main-section">
    <div class="card mb-6"> 
      <div class="card-content">
      <form method="post" enctype="multipart/form-data" action="{{ URL::to('updateFeedback') }}">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input type="hidden" name="id" value="{{ $feedback->id }}">
          <div class="field">
            <label class="label">Client</label>
            <div class="field-body">
              <div class="field">
                <div class="control icons-left">
                  <input class="input" type="text" name="name" value="{{ $feedback->name }}">
                  <span class="icon left"><i class="mdi mdi-account"></i></span>
                </div>
              </div>
            </div>
          </div>          
          <hr>
          <div class="field">
            <label class="label">Profession</label>
            <div class="field-body">
              <div class="field">
                <div class="control icons-left">
                  <input class="input" type="text" name="profession" value="{{ $feedback->profession }}">
                  <span class="icon left"><i class="mdi mdi-account"></i></span>
                </div>
              </div>
            </div>
          </div>          
          <hr>
          
          <div class="field">
            <label class="label">Message</label>
            <div class="control">
              <textarea class="textarea" name="message" value="{{ $feedback->message }}"></textarea>
            </div>
          </div>
          <hr>
          <div class="field">
          <label class="label">Client image</label>
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
