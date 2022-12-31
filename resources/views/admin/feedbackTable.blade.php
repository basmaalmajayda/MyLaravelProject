@extends('layouts.mainDashboard')
@section('content')

<section class="section main-section">
<div class="card has-table"> 
<header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
          Feedback
        </p>
        <a href="#" class="card-header-icon">
          <span class="icon"><i class="mdi mdi-reload"></i></span>
        </a>
      </header>
<div class="card-content">
        <table>
          <thead>
          <tr>
            <th>Client image</th>
            <th>id</th>
            <th>Name</th>
            <th>Profession</th>
            <th>Message</th>
            <th>Created</th>
            <th>Deleted</th>
            <th></th>
          </tr>
          </thead>
          <tbody>
          @foreach($feedbacks as $feedback)
          <tr>
          <td>
            <img style="width: 50px; height: 50px;" src= "{{ asset( $feedback->img) }}" >
            </td>
            <td data-label="Name">{{$feedback->id}}</td>
            <td data-label="Name">{{$feedback->name}}</td>
            <td data-label="Company">{{$feedback->profession}}</td>
            <td data-label="Company">{{$feedback->message}}</td>
            <td data-label="Created">
              <small class="text-gray-500">{{$feedback->created_at}}</small>
            </td>
            <td data-label="Created">
              <small class="text-gray-500">{{$feedback->deleted_at}}</small>
            </td>
            @if(@empty($feedback->deleted_at))
            <td class="actions-cell">
              <div class="buttons right nowrap">
                <button class="button small green --jb-modal"  data-target="sample-modal-2" type="button">
                <a href="{{URL::to('/editFeedback/' . $feedback->id )}}"><span class="icon"><i class="mdi mdi-square-edit-outline"></i></span></a>
                </button>
                <button class="button small red --jb-modal" data-target="sample-modal" type="button">
                <a href="{{URL::to('/deleteFeedback/' . $feedback->id )}}"><span class="icon"><i class="mdi mdi-trash-can"></i></span></a>
                </button>
              </div>
            </td>
            @else
            <td class="actions-cell">
              <div class="buttons right nowrap">
                <button class="button small red --jb-modal"  data-target="sample-modal-2" type="button">
                <a href="{{URL::to('/restoreFeedback/'. $feedback->id )}}"><span class="icon"><i class="mdi mdi-reload"></i></span></a>
                </button>
              </div>
            </td>
            @endif
          </tr>
          @endforeach
          </tbody>
        </table>

        <div>
            {{ $feedbacks->links() }}
        </div>

      </div>
    </div>

<br><br>


  </section>
@stop