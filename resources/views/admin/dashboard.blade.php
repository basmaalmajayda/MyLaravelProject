@extends('layouts.mainDashboard')
@section('content')

  <section class="section main-section">
    <div class="grid gap-6 grid-cols-1 md:grid-cols-3 mb-6">
      
        <a  href="{{URL::to('/showServices') }}">
      <div class="card">
        <div class="card-content">
          <div class="flex items-center justify-between">
            <div class="widget-label">
              <h3>
                Services
              </h3>
              <h1>
                {{ $countSrevice }} 
              </h1>
              <small > All services</small>
            </div>
            <span class="icon widget-icon text-blue-500"><i class="mdi mdi-cart-outline mdi-48px"></i></span>
          </div>
        </div>
      </div>
</a>
<a  href="{{URL::to('/showBlogs') }}">
      <div class="card">
        <div class="card-content">
          <div class="flex items-center justify-between">
            <div class="widget-label">
              <h3>
                Blogs
              </h3>
              <h1>
                {{ $countBlog }} 
              </h1>
              <small > All blogs</small>
            </div>
            <span class="icon widget-icon text-red-500"><i class="mdi mdi-eye mdi-48px"></i></span>
          </div>
        </div>
      </div>
</a>
<a  href="{{URL::to('/showTeam') }}">
      <div class="card">
        <div class="card-content">
          <div class="flex items-center justify-between">
            <div class="widget-label">
              <h3>
                Team Members
              </h3>
              <h1>
                {{ $countTeam }} 
              </h1>
              <small > All team members</small>
            </div>
            <span class="icon widget-icon text-green-500"><i class="mdi mdi-account-multiple mdi-48px"></i></span>
          </div>
        </div>
      </div>
</a>
</div>
<div class="grid gap-6 grid-cols-1 md:grid-cols-3 mb-6">
<a  href="{{URL::to('/showFeedback') }}">
      <div class="card">
        <div class="card-content">
          <div class="flex items-center justify-between">
            <div class="widget-label">
              <h3>
                Feedbacks
              </h3>
              <h1>
                {{ $countFeedback }} 
              </h1>
              <small > All feedbacks</small>
            </div>
            <span class="icon widget-icon text-red-500"><i class="mdi mdi-account-multiple mdi-48px"></i></span>
          </div>
        </div>
      </div>
</a>
<a  href="{{URL::to('/showContacts') }}">
      <div class="card">
        <div class="card-content">
          <div class="flex items-center justify-between">
            <div class="widget-label">
              <h3>
                Contacts
              </h3>
              <h1>
                {{ $countContact }} 
              </h1>
              <small > All contacts</small>
            </div>
            <span class="icon widget-icon text-green-500"><i class="mdi mdi-account-multiple mdi-48px"></i></span>
          </div>
        </div>
      </div>
</a>
    </div>
  </section>

@stop
