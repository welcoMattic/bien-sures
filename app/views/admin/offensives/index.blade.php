@extends('admin.layouts.withSidebar')

@section('content')

<h2>Gestion des Agressions</h2>

<div class="row">
  <div class="col-lg-12">
  <div class="panel panel-default">
    <div class="panel-heading">
    <span>{{ count($offensives) }} agressions <a href="{{ URL::to('admin/offensives/create') }}" class="btn btn-info btn-xs pull-right">Ajouter une agression</a></span>
    </div>
    <div class="panel-body">
    <div class="table-responsive">
      <table class="table table-hover table-striped table-bordered">
      <thead>
        <tr>
        <th>#</th>
        <th>Contexte</th>
        <th>Phrase</th>
        <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($offensives as $offensive)
        <tr>
          <td>{{ $offensive->id }}</td>
          <td>{{ $offensive->description }}</td>
          <td>{{ $offensive->quote }}</td>
          <td>
          <a href="{{ URL::to('admin/offensives/' . $offensive->id . '/edit') }}" class="btn btn-info btn-sm pull-left">Éditer</a>
          {{ Form::open(['url' => 'admin/offensives/' . $offensive->id, 'class' => 'pull-left']) }}
            {{ Form::hidden('_method', 'DELETE') }}
            &nbsp;{{ Form::submit('Supprimer', [
              'class'   => 'btn btn-danger btn-sm',
              'onclick' => 'return confirm("Êtes-vous sûr de vouloir supprimer cette agression");'
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