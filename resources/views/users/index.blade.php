<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Users</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/users.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <div class="container mt-3 mb-5 col-5 bg-dark-subtle">
    <h4 class="pt-3">{{ isset($user) ? 'Ubah ' : 'Tambah ' }}Data User</h4>


    <form action="{{ isset($user) ? route('users.update', $user->id) : route('users.store') }}" method="post">
      @csrf
      @isset($user)
        @method('PUT')
      @endisset

      <div class="mb-3">
        <label for="nim" class="form-label">NIM</label>
        <input type="text" class="form-control" id="nim" name="nim"
          value="{{ isset($user) ? $user->nim : '' }}">
      </div>

      <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama"
          value="{{ isset($user) ? $user->nama : '' }}">
      </div>

      <div class="mb-3">
        <label for="alamat">Alamat</label>
        <textarea class="form-control" id="alamat" name="alamat">{{ isset($user) ? $user->nim : '' }}</textarea>
      </div>

      <div class="mb-3">
        <label for="fakultas">Fakultas</label>
        <select class="form-select" id="fakultas" name="fakultas">
          <option value="teknik">Teknik</option>
        </select>
      </div>

      <button type="submit" class="btn btn-primary mb-3">Simpan</button>
    </form>
  </div>

  <div class="container col-10">
    <table class="table table-primary table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">NIM</th>
          <th scope="col">Nama</th>
          <th scope="col">Alamat</th>
          <th scope="col">Fakultas</th>
          <th scope="col" class="pr-0">Aksi</th>
        </tr>
      </thead>

      <tbody>
        @foreach ($users as $user)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $user->nim }}</td>
            <td>{{ $user->nama }}</td>
            <td>{{ $user->alamat }}</td>
            <td>{{ $user->fakultas }}</td>
            <td class="d-flex flex-row">
              <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Ubah</a>

              <form action="{{ route('users.destroy', $user->id) }}" method="post">
                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Hapus</button>
              </form>
            </td>
          </tr>
        @endforeach

      </tbody>
    </table>
  </div>
</body>

</html>
