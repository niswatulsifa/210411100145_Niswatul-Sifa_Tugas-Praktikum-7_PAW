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
        <h1 class="text-center mb-5">About Me</h1>
    </div>
    <div class="content">
        <div class="container text-center">
            <img src="{{ asset('img/sifa.jpg') }}" width="200" alt="Sifa Image">
            <h5 class="display-4">Niswatul Sifa</h5>
            <p class="lead">Teknik Informatika</p>
        </div>
    </div>
    <div class="container text-justify">
        <div class="body">
            <h5 class="title">Background</h5>
            <p class="text">Nama saya Niswatul Sifa, 
                Saya lahir di Pamekasan pada Tanggal 16 Maret 2003. Saya anak Terakhir dari 3 bersaudara. 
                Saya sekarang tinggal di Desa Tentenan Barat, Kecamatan Larangan, Kabupaten Pamekasan.
                Disini saya akan menceritakan diri saya dari sejak sekolah dasar sampai menjadi mahasiswa di Universitas Trunojoyo Madura. Sebenarnya hal ini sudah pernah saya ceritakan di pertemuan sebelumnya.<br>
                Jadi saya memilih Teknik Informatika memang karena keinginan saya dari dulu sejak SMA kelas 3. 
                Sebelum saya diterima di Universitas Trunojoyo Madura ini, sebelumnya saya mendaftar SNMPTN di ITS dengan pilihan pertama Teknik Informatika dan pilihan kedua Sistem Informasi. 
                Tetapi pada saat pengumuman kelulusan SNMPTN saya dinyatakan tidak lulus, awalnya memang sedih karena tidak diterima SNMPTN di kampus idaman saya, dan saya juga sadar bahwa 
                jurusan Teknik Informatika ini banyak sekali peminatnya apalagi di ITS tersebut. Tapi saya tidak putus hanya disitu saja karena tidak keterima SNMPTN, 
                saya mendaftar lagi di jalur yang kedua yaitu jalur SBMPTN dengan universitas yang saya pilih tetap di ITS dengan Jurusan Sistem Informasi dan pilihan kedua yaitu Universitas Trunojoyo Madura dengan jurusan Teknik Informatika. 
                Selain mendaftar pada PTN saya juga mendaftar di IAIN untuk jaga-jaga takutnya di SBMPTN ini saya tidak diterima seperti SNMPTN. Tetapi ternyata pengumuman antara kelulusan PTN dan IAIN ini sama, 
                saya melihat pada pengumuman IAIN terlebih dahulu dan ternyata saya keterima di IAIN tersebut dengan prodi Perbankan Syariah. Setelah itu saya melihat pengumuman pada PTN jalur SBMPTN ini dan ternyata saya keterima juga di Universitas Trunojoyo Madura dengan prodi Teknik Informatika. 
                Pada saat itu saya bimbang universitas mana yang akan saya pilih, tetapi saya meminta petunjuk sama Allah SWT yang mana yang terbaik untuk saya. dan pada saat itu saya memilih Universitas Trunojoyo Madura dengan prodi Teknik Informatika, mungkin itu petunjuk yang terbaik dari Allah untuk saya 
                dan juga prodi tersebut memang merupakan prodi yang saya inginkan jadi saya mengambil prodi Teknik Informatika di Universitas Trunojoyo Madura.
            </p>
        </div>
        <div class="body">
            <h5 class="title">Suka Duka Praktikum PAW</h5>
            <p class="text">
                Suka duka saya selama mengikuti praktikum PAW ini, ada senangnya ada sedihnya. 
                Senangnya disini yaitu bisa menambah pengetahuan apalagi tentang framework, untuk sedihnya disini karena menurut saya ketika kakak asprak menjelaskan suatu materi terlalu cepat. 
                Ya memang si dikejar waktu takutnya materi tidak tersampaikan, tetapi kan setiap anak berbeda-beda. Jadi harapan saya semoga kedepannya ketika menjelaskan bisa lebih pelan hehe. <br>
                Itu dulu ya suka duka untuk praktikum PAW, See you.
            </p>
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