@extends('layouts.mainDashboard')
@section('content')

  <section class="section main-section">
    
   <div class="card has-table"> 
<header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
          Contacts
        </p>
        <a href="#" class="card-header-icon">
          <span class="icon"><i class="mdi mdi-reload"></i></span>
        </a>
      </header>
      <div class="card-content">
        <table>
          <thead>
          <tr>
            <th class="image-cell">  </th>
            <th>id</th>
            <th>name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Sent at</th>
            <th></th>
          </tr>
          </thead>
          <tbody>
          @foreach($contacts as $contact)
          <tr>
          <td class="image-cell">  </td>
            <td data-label="Name">{{$contact->id}}</td>
            <td data-label="Name">{{$contact->name}}</td>
            <td data-label="Company">{{$contact->email}}</td>
            <td data-label="Company">{{$contact->subject}}</td>
            <td data-label="Created">
              <small class="text-gray-500">{{$contact->message}}</small>
            </td>
            <td data-label="Created">
              <small class="text-gray-500">{{$contact->created_at}}</small>
            </td>
            @if(@empty($contact->deleted_at))
            <td class="actions-cell">
              <div class="buttons right nowrap">
                <button class="button small red --jb-modal" data-target="sample-modal" type="button">
                <a href="{{URL::to('/deleteContact/' . $contact->id )}}"><span class="icon"><i class="mdi mdi-trash-can"></i></span></a>
                </button>
              </div>
            </td>
            @else
            <td class="actions-cell">
              <div class="buttons right nowrap">
                <button class="button small red --jb-modal"  data-target="sample-modal-2" type="button">
                <a href="{{URL::to('/restoreContact/'. $contact->id )}}"><span class="icon"><i class="mdi mdi-reload"></i></span></a>
                </button>
              </div>
            </td>
            @endif
          </tr>
          @endforeach
          </tbody>
        </table>

        <div>
            {{ $contacts->links() }}
        </div>
        
      </div>
    </div>

<br><br>

  </section>
@stop