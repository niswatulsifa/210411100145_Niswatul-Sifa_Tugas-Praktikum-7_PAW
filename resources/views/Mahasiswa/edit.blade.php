<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sifa | CRUD</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('template/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/dist/css/adminlte.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<div class="wrapper">

    <!-- Navbar -->
    @include('partials.navbar')

  </head>
  <body>
    
    <div class="container mt-5">
        <h1 class="text-center mb-5">Form Edit Data Mahasiswa</h1>
        <div class="card">
            <div class="card-body">
                <div class="mx-auto"> 
                    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
                        @csrf
                        @method('patch')
                        <div class="mb-3">
                            <label><b>NRP</b></label>
                            <input type="text" class="form-control" name="nrp" value="{{ $mahasiswa->nrp }}">
                        </div> 
                        <div class="mb-3">
                            <label><b>Nama</b></label>
                            <input type="text" class="form-control" name="nama" value="{{ $mahasiswa->nama }}">
                        </div> 
                        <div class="mb-3">
                            <label><b>Email</b></label>
                            <input type="email" class="form-control" name="email" value="{{ $mahasiswa->email }}">
                        </div> 
                        <div class="mb-3">
                            <label><b>Alamat</b></label>
                            <input type="text" class="form-control" name="alamat" value="{{ $mahasiswa->alamat }}">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-success float-end">Edit</button>
                        </div> 
                    </form>
                </div>
            </div>
        </div>
    </div>

<!--Footer -->
<footer class="main-footer">
    @include('partials.footer')
  </footer>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>