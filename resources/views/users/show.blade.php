<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>User {{ $user->name }}</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 margin-tb">
        <div class="pull-left">
          <h2> Show User</h2>
        </div>
        <div class="pull-right">
          <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <strong>Name:</strong>
          {{ $user->name }}
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <strong>Email:</strong>
          {{ $user->email }}
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <strong>Created at:</strong>
          {{ $user->created_at }}
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <strong>Roles:</strong>
          @if (!empty($user->getRoleNames()))
            @foreach ($user->getRoleNames() as $v)
              <span class="badge rounded-pill bg-dark">{{ $v }}</span>
            @endforeach
          @endif
        </div>
      </div>
    </div>
  </div>
</body>

</html>
