@extends('layouts.mainDashboard')
@section('content')

  <section class="section main-section">
    
    <div class="card has-table">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
          Services
        </p>
        <a href="#" class="card-header-icon">
          <span class="icon"><i class="mdi mdi-reload"></i></span>
        </a>
      </header>
      <div class="card-content">
        <table>
          <thead>
          <tr>
            <th>Service image</th>
            <th>id</th>
            <th>Name</th>
            <th>Title</th>
            <th>Description</th>
            <th></th>
          </tr>
          </thead>
          <tbody>
            @foreach($services as $service)
          <tr>
            <td>
            <img style="width: 50px; height: 45px;" src= "{{ asset($service->img) }}" >
            </td>
            <td data-label="Name">{{$service->id}}</td>
            <td data-label="Name">{{$service->name}}</td>
            <td data-label="Company">{{$service->title}}</td>
            <td data-label="Company">{{$service->description}}</td>
            
            @if(@empty($service->deleted_at))
            <td class="actions-cell">
              <div class="buttons right nowrap">
                <button class="button small green --jb-modal"  data-target="sample-modal-2" type="button">
                <a href="{{URL::to('/editService/' . $service->id ) }}"><span class="icon"><i class="mdi mdi-square-edit-outline"></i></span></a>
                </button>
                <button class="button small red --jb-modal" data-target="sample-modal" type="button">
                <a href="{{URL::to('/deleteService/' . $service->id ) }}"><span class="icon"><i class="mdi mdi-trash-can"></i></span></a>
                </button>
              </div>
            </td>
            @else
            <td class="actions-cell">
              <div class="buttons right nowrap">
                <button class="button small red --jb-modal"  data-target="sample-modal-2" type="button">
                <a href="{{URL::to('/restoreService/'. $service->id )}}"><span class="icon"><i class="mdi mdi-reload"></i></span></a>
                </button>
              </div>
            </td>
            @endif
          </tr>
          @endforeach
          </tbody>
        </table>
        <div>
            {{ $services->links() }}
        </div>
      </div>
    </div>

<br><br>
  </section>
@stop