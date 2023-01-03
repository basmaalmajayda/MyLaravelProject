@extends('layouts.mainDashboard')
@section('content')

  <section class="section main-section">
<div class="card has-table"> 
<header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
          Team
        </p>
        <a href="#" class="card-header-icon">
          <span class="icon"><i class="mdi mdi-reload"></i></span>
        </a>
      </header>
<div class="card-content">
        <table>
          <thead>
          <tr>
            <th>Member image</th>
            <th>id</th>
            <th>Name</th>
            <th>job</th>
            <th></th>
          </tr>
          </thead>
          <tbody>
          @foreach($teams as $team)
          <tr>
          <td>
            <img style="width: 50px; height: 50px;" src="{{ asset($team->img) }}" >
            </td>
            <td data-label="Name">{{$team->id}}</td>
            <td data-label="Name">{{$team->name}}</td>
            <td data-label="Company">{{$team->job}}</td>
            
            @if(@empty($team->deleted_at))
            <td class="actions-cell">
              <div class="buttons right nowrap">
                <button class="button small green --jb-modal"  data-target="sample-modal-2" type="button">
                <a href="{{URL::to('/editTeam/' . $team->id )}}"><span class="icon"><i class="mdi mdi-square-edit-outline"></i></span></a>
                </button>
                <button class="button small red --jb-modal" data-target="sample-modal" type="button">
                <a href="{{URL::to('/deleteTeam/' . $team->id )}}"><span class="icon"><i class="mdi mdi-trash-can"></i></span></a>
                </button>
              </div>
            </td>
            @else
            <td class="actions-cell">
              <div class="buttons right nowrap">
                <button class="button small red --jb-modal"  data-target="sample-modal-2" type="button">
                <a href="{{URL::to('/restoreTeam/'. $team->id )}}"><span class="icon"><i class="mdi mdi-reload"></i></span></a>
                </button>
              </div>
            </td>
            @endif
          </tr>
          @endforeach
          </tbody>
        </table>
        
        <div>
            {{ $teams->links() }}
        </div>

      </div>
    </div>

<br><br>


  </section>
@stop