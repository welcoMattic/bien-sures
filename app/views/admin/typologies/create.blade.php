@extends('admin.layouts.withSidebar')

@section('content')

<h2>Gestion des Typologies</h2>

<div class="panel panel-default">
  <div class="panel-heading">
    Ajout d'une typologie
  </div>
  <div class="panel-body">
    {{ Form::open(['url' => 'admin/typologies']) }}
      <fieldset>
        @if(Session::has('message'))
          <p class="alert alert-{{ Session::get('alertClass') }}">{{ Session::get('message') }}</p>
        @endif
        <div class="form-group">
          {{ Form::label('description', "Nom") }}
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
            {{ Form::text('name', Input::old('name'), ['placeholder' => 'Nom', 'class' => 'form-control']) }}
          </div>
        </div>
      </fieldset>
      {{ Form::submit('Ajouter', ['class' => 'btn btn-success']) }}
    {{ Form::close() }}
  </div>
</div>

@stop