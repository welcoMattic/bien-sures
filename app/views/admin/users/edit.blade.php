@extends('admin.layouts.withSidebar')

@section('content')

<h2>Gestion des Utilisateurs</h2>

<div class="panel panel-default">
    <div class="panel-heading">
        Ajout d'un utilisateur
    </div>
    <div class="panel-body">
      {{ Form::model($user, array('route' => array('admin.users.update', $user->id), 'method' => 'PUT')) }}
        <fieldset>
          @if(Session::has('loginError'))
            <p class="alert alert-{{ Session::get('alertClass') }}">{{ Session::get('storeError') }}</p>
          @endif
          <div class="form-group">
            {{ Form::label('username', "Nom d'utilisateur") }}
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              {{ Form::text('username', Input::old('username'), ['placeholder' => 'username', 'class' => 'form-control']) }}
          </div>
        </fieldset>
        <fieldset>
          <div class="form-group">
            {{ Form::label('password', 'Mot de passe') }}
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              {{ Form::password('password', ['class' => 'form-control']) }}
            </div>
          </div>
          {{ Form::submit('Ajouter', ['class' => 'btn btn-success']) }}
        </fieldset>
      {{ Form::close() }}
    </div>
</div>
@stop