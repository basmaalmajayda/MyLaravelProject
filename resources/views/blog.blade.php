@extends('layouts.main')
@section('content')
@include('includes.include')

@include('includes.includeBlog', ['blogs', $blogs])
<div>
    {{$blogs->links()}}
    </div>
@stop