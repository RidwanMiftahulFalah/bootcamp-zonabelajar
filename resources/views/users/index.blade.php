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
    <h4 class="pt-3">Data User</h4>

    <form>
      <div class="mb-3">
        <label for="InputNIM" class="form-label">NIM</label>
        <input type="text" class="form-control" id="InputNIM">
      </div>

      <div class="mb-3">
        <label for="InputNama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="InputNama">
      </div>

      <div class="mb-3">
        <label for="InputAlamat">Alamat</label>
        <textarea class="form-control" id="InputAlamat"></textarea>
      </div>

      <div class="mb-3">
        <label for="InputFakultas">Fakultas</label>
        <select class="form-select" id="InputFakultas">
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
      </div>

      <button type="submit" class="btn btn-primary mb-3">Submit</button>
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
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>1234</td>
          <td>Maman Suherman</td>
          <td>Cimahi</td>
          <td>Teknik</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>5678</td>
          <td>Asep Sutisna</td>
          <td>Bandung</td>
          <td>Teknik</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>6543</td>
          <td>Dadang Nurjaman</td>
          <td>Soreang</td>
          <td>Teknik</td>
        </tr>
      </tbody>
    </table>
  </div>
</body>

</html>
