@extends('admin.layouts.withSidebar')

@section('content')

<h2>Gestion des Typologies</h2>

<div class="row">
  <div class="col-lg-12">
  <div class="panel panel-default">
    <div class="panel-heading">
    <span><% count($typologies) %> typologies <a href="<% URL::to('admin/typologies/create') %>" class="btn btn-info btn-xs pull-right">Ajouter une typologie</a></span>
    </div>
    <div class="panel-body">
    <div class="table-responsive">
      <table class="table table-hover table-striped table-bordered">
      <thead>
        <tr>
        <th>#</th>
        <th>Nom</th>
        <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($typologies as $typology)
        <tr>
          <td><% $typology->id %></td>
          <td><% $typology->name %></td>
          <td>
          <a href="<% URL::to('admin/typologies/' . $typology->id . '/edit') %>" class="btn btn-info btn-sm pull-left">Éditer</a>
          <% Form::open(['url' => 'admin/typologies/' . $typology->id, 'class' => 'pull-left']) %>
            <% Form::hidden('_method', 'DELETE') %>
            &nbsp;<% Form::submit('Supprimer', [
              'class'   => 'btn btn-danger btn-sm',
              'onclick' => 'return confirm("Êtes-vous sûr de vouloir supprimer cette typologie");'
            ]) %>
          <% Form::close() %>
          </td>
        </tr>
        @endforeach
      </tbody>
      </table>
    </div>
    </div>
  </div>
  </div>
</div>

@stop