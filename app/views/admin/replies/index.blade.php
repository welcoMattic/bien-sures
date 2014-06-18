@extends('admin.layouts.withSidebar')

@section('content')

<h2>Gestion des Répliques</h2>

<div class="row">
  <div class="col-lg-12">
  <div class="panel panel-default">
    <div class="panel-heading">
    <span>{{ count($replies) }} répliques </span>
    </div>
    <div class="panel-body">
    <div class="table-responsive">
      <table class="table table-hover table-striped table-bordered">
      <thead>
        <tr>
        <th>#</th>
        <th>Phrase</th>
        <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($replies as $reply)
        <tr>
          <td>{{ $reply->id }}</td>
          <td>{{ $reply->quote }}</td>
          <td>
          <a href="{{ URL::to('admin/replies/' . $reply->id . '/edit') }}" class="btn btn-info btn-sm pull-left">Éditer</a>
          {{ Form::open(['url' => 'admin/replies/' . $reply->id, 'class' => 'pull-left']) }}
            {{ Form::hidden('_method', 'DELETE') }}
            &nbsp;{{ Form::submit('Supprimer', [
              'class'   => 'btn btn-danger btn-sm',
              'onclick' => 'return confirm("Êtes-vous sûr de vouloir supprimer cette réplique");'
            ]) }}
          {{ Form::close() }}
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