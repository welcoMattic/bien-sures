@extends('admin.layouts.withSidebar')

@section('content')

<h2>Gestion des Utilisateurs</h2>

<div class="row">
  <div class="col-lg-12">
  <div class="panel panel-default">
    <div class="panel-heading">
    <span><% count($users) %> utilisateurs <a href="<% URL::to('admin/users/create') %>" class="btn btn-info btn-xs pull-right">Créer un utilisateur</a></span>
    </div>
    <div class="panel-body">
    <div class="table-responsive">
      <table class="table table-hover table-striped table-bordered">
      <thead>
        <tr>
        <th>#</th>
        <th>Nom d'utilisateur</th>
        <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
        <tr>
          <td><% $user->id %></td>
          <td><% $user->username %></td>
          <td>
          <a href="<% URL::to('admin/users/' . $user->id . '/edit') %>" class="btn btn-info btn-sm pull-left">Éditer</a>
          <% Form::open(['url' => 'admin/users/' . $user->id, 'class' => 'pull-left']) %>
            <% Form::hidden('_method', 'DELETE') %>
            &nbsp;<% Form::submit('Supprimer', [
              'class'   => 'btn btn-danger btn-sm',
              'onclick' => 'return confirm("Êtes-vous sûr de vouloir supprimer ' . $user->username . '");'
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