@extends('layouts.main')

@section('content')
@include('includes.include')

@include('includes.includeAbout')   

@include('includes.includeTeam' , ['teams', $teams])
<div>
    {{$teams->links()}}
    </div>

@stop
