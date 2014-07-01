@extends('admin.layouts.withSidebar')

@section('content')

<h2>Gestion des Répliques</h2>

<div class="panel panel-default">
  <div class="panel-heading">
    Modification d'une réplique
  </div>
  <div class="panel-body">
    <% Form::model($reply, ['route' => ['admin.replies.update', $reply->id], 'method' => 'PUT']) %>
      <fieldset>
        @if(Session::has('message'))
          <p class="alert alert-<% Session::get('alertClass') %>"><% Session::get('editError') %></p>
        @endif
        <div class="form-group">
        <% Form::label('quote', 'Réplique') %>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-comment"></i></span>
            <% Form::textarea('quote', Input::old('quote'), ['placeholder' => 'Réplique', 'class' => 'form-control']) %>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-xs-6">
            <% Form::label('typology_id', 'Typologie') %>
            <select name="typology_id" id="typology_id" class="form-control">
              @foreach ($typologies as $typology)
                <% Form::getSelectOption($typology->id . ' - ' .$typology->name, $typology->id, 0); %>
              @endforeach
            </select>
          </div>
        </div>
        <% Form::submit('Modifier', ['class' => 'btn btn-success']) %>
      </fieldset>
    <% Form::close() %>
  </div>
</div>
@stop