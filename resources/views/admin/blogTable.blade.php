@extends('layouts.mainDashboard')
@section('content')

  <section class="section main-section">
    
   <div class="card has-table"> 
<header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
          Blogs
        </p>
        <a href="#" class="card-header-icon">
          <span class="icon"><i class="mdi mdi-reload"></i></span>
        </a>
      </header>
      <div class="card-content">
        <table>
          <thead>
          <tr>
            <th class="image-cell">Blog image</th>
            <th>id</th>
            <th>Title</th>
            <th>Subject</th>
            <th>Description</th>
            <th>Auther</th>
            <th class="image-cell">Auther image</th>
            <th></th>
          </tr>
          </thead>
          <tbody>
          @foreach($blogs as $blog)
          <tr>
          <td>
            <img style="width: 50px; height: 50px;" src= "{{ asset($blog->img) }}" >
            </td>
            <td data-label="Name">{{$blog->id}}</td>
            <td data-label="Name">{{$blog->title}}</td>
            <td data-label="Company">{{$blog->subject}}</td>
            <td data-label="Company">{{$blog->description}}</td>
            <td data-label="Company">{{$blog->auther}}</td>
            <td>
            <img style="width: 50px; height: 50px;" src= "{{ asset($blog->img_auther) }}" >
            </td>
            
            @if(@empty($blog->deleted_at))
            <td class="actions-cell">
              <div class="buttons right nowrap">
                <button class="button small green --jb-modal"  data-target="sample-modal-2" type="button">
                <a href="{{URL::to('/editBlog/' . $blog->id )}}"><span class="icon"><i class="mdi mdi-square-edit-outline"></i></span></a>
                </button>
                <button class="button small red --jb-modal" data-target="sample-modal" type="button">
                <a href="{{URL::to('/deleteBlog/' . $blog->id )}}"><span class="icon"><i class="mdi mdi-trash-can"></i></span></a>
                </button>
              </div>
            </td>
            @else
            <td class="actions-cell">
              <div class="buttons right nowrap">
                <button class="button small red --jb-modal"  data-target="sample-modal-2" type="button">
                <a href="{{URL::to('/restoreBlog/'. $blog->id )}}"><span class="icon"><i class="mdi mdi-reload"></i></span></a>
                </button>
              </div>
            </td>
            @endif
          </tr>
          @endforeach
          </tbody>
        </table>

        <div>
            {{ $blogs->links() }}
        </div>
        
      </div>
    </div>

<br><br>

  </section>
@stop