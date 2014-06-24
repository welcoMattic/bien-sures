@extends('admin.layouts.withSidebar')

@section('content')

<h2>Gestion des Typologies</h2>

<div class="panel panel-default">
  <div class="panel-heading">
    Modification d'une typologie
  </div>
  <div class="panel-body">
    <% Form::model($typology, ['route' => ['admin.typologies.update', $typology->id], 'method' => 'PUT']) %>
      <fieldset>
        @if(Session::has('message'))
          <p class="alert alert-<% Session::get('alertClass') %>"><% Session::get('editError') %></p>
        @endif
        <div class="form-group">
          <% Form::label('name', "Nom") %>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
            <% Form::text('name', Input::old('name'), ['placeholder' => 'Nom', 'class' => 'form-control']) %>
          </div>
        </div>
      </fieldset>
      <% Form::submit('Modifier', ['class' => 'btn btn-success']) %>
    <% Form::close() %>
  </div>
</div>
@stop