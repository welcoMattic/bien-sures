@extends('admin.layouts.default')

@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="login-panel panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Authentification</h3>
        </div>
        <div class="panel-body">
          {{ Form::open(array('url' => 'login', 'role' => 'form')) }}
            <fieldset>
              @if(Session::has('loginError'))
                <p class="alert alert-{{ Session::get('alertClass') }}">{{ Session::get('loginError') }}</p>
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
              {{ Form::submit('Connexion', ['class' => 'btn btn-lg btn-success btn-block']) }}
            </fieldset>
          {{ Form::close() }}
        </div>
      </div>
    </div>
  </div>
@stop
