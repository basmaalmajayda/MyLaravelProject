@extends('layouts.mainDashboard')
@section('content')

@include('includes.includeAddStatus')

@include('includes.includeErrors')

<section class="section main-section">
    <div class="card mb-6"> 
      <div class="card-content">
      <form method="post" enctype="multipart/form-data" action="{{ URL::to('/storeFeedback') }}">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="field">
            <label class="label">Client</label>
            <div class="field-body">
              <div class="field">
                <div class="control icons-left">
                  <input class="input" type="text" placeholder="Client name" name="name">
                  <span class="icon left"><i class="mdi mdi-account"></i></span>
                </div>
              </div>
            </div>
          </div>          
          <hr>
          <div class="field">
            <label class="label">Proffesion</label>
            <div class="field-body">
              <div class="field">
                <div class="control icons-left">
                  <input class="input" type="text" placeholder="Client profession" name="profession">
                  <span class="icon left"><i class="mdi mdi-account"></i></span>
                </div>
              </div>
            </div>
          </div>          
          <hr>
          
          <div class="field">
            <label class="label">Message</label>
            <div class="control">
              <textarea class="textarea" placeholder="Message" name="message"></textarea>
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
