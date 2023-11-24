<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Users</title>
</head>

<body>
  <h1>{{ $pageTitle }}</h1>
  
  @if (session('message'))
  <h3>{{ session('message') }}</h3>
  @endif

  <a href="{{ route('users.create') }}">Tambah Data</a>
</body>

</html>
