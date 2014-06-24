@extends('admin.layouts.withSidebar')

@section('content')

<h2>Gestion des Agressions</h2>

<div class="panel panel-default">
  <div class="panel-heading">
    Modification d'une agression
  </div>
  <div class="panel-body">
    <% Form::model($offensive, ['route' => ['admin.offensives.update', $offensive->id], 'method' => 'PUT']) %>
      <fieldset>
        @if(Session::has('message'))
          <p class="alert alert-<% Session::get('alertClass') %>"><% Session::get('editError') %></p>
        @endif
        <div class="form-group">
          <% Form::label('description', "Contexte") %>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
            <% Form::textarea('description', Input::old('description'), ['placeholder' => 'Contexte', 'class' => 'form-control']) %>
          </div>
        </div>
      </fieldset>
      <fieldset>
        <div class="form-group">
        <% Form::label('quote', 'Phrase d\'agression') %>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-comment"></i></span>
            <% Form::textarea('quote', Input::old('quote'), ['placeholder' => 'Phrase d\'agression', 'class' => 'form-control']) %>
          </div>
        </div>
        <% Form::submit('Modifier', ['class' => 'btn btn-success']) %>
      </fieldset>
    <% Form::close() %>
  </div>
</div>
@stop