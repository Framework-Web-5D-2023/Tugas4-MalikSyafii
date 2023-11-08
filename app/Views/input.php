<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?= $title ?>
  </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url("/"); ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= base_url("/input"); ?>">Input</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
    <h1><?= $title; ?></h1>
    <form action="<?= base_url("/create"); ?>" method="post">
      <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Inputkan Nama...">
      </div>
      <div class="mb-3">
        <label for="npm" class="form-label">Npm</label>
        <input type="text" class="form-control" id="npm" name="npm" placeholder="Inputkan Npm..." required>
      </div>
      <div class="mb-3">
        <label for="prodi" class="form-label">Prodi</label>
        <input type="text" class="form-control" id="prodi" name="prodi" placeholder="Inputkan Prodi..." required>
      </div>
      <div class="mb-3">
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
    </form>
  </div>
</body>

</html>