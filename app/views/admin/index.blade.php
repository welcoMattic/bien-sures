@extends('admin.layouts.withSidebar')

@section('content')

<h2>Dashboard :</h2>
@foreach ($offensives as $key => $offensive)
  <div class="well">
    <i>{{ $offensive->description }}</i>
    <h3>Agression :</h3>
    <blockquote>{{ $offensive->quote }}</blockquote>
    @foreach ($offensive->replies as $reply)
      <h3>Répliques :</h3>
      <blockquote>{{ $reply->quote }}</blockquote>
    @endforeach
  </div>
@endforeach

@stop