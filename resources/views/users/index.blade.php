@extends('layouts.master')
@section('content')
  <div class="row">
    <div class="col-lg-12 margin-tb">
      <div class="pull-left">
        <h2 class="text-white">Users Management</h2>
      </div>
      <div class="pull-right">

          <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>

      </div>
    </div>
  </div>
  @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
  @endif
  <table class="table table-bordered bg-white">
    <tr>
      <th>No</th>
      <th>Name</th>
      <th>Role</th>
      <th width="280px">Action</th>
    </tr>

    @foreach ($data as $key => $d)
      <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $d->name }}</td>
        <td class="text-white mt-2 badge text-bg-dark ">{{ implode(" , ",$d->roles_name) }}</td>
        <td>
          <a class="btn btn-info" href="{{ route('users.show', $d->id) }}">Show</a>
          <a class="btn btn-secondary" href="{{ route('users.edit', $d->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $d->id], 'style' => 'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
      </tr>
    @endforeach
  </table>

@endsection
