<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Tambahkan link CSS Bootstrap di dalam tag head -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Data Mahasiswa</h1>
        <div class="row">
            <div class="col-md-6">
                <form action="">
                    <div class="row g-4 mb-3">
                        <div class="col-lg-3 col-md-2 col-sm-4">
                            <div class="search-box">
                                <input type="text" class="form-control search" id="search-task-options" placeholder="Cari nama...." name="keyword" value="{{ $keyword }}">
                                <i class="ri-search-line search-icon"></i>
                            </div>
                        </div>

                        <div class="col-lg-2 col-sm-4">
                            <a href="{{ route('home')}}" class="btn btn-danger w-100"> <i class="ri-restart-line  me-1 align-bottom"></i>
                                Reset
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4">
                            <button type="submit" class="btn btn-primary w-100"> <i class="ri-search-line me-1 align-bottom"></i>
                                Cari
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <h5>Total Mahasiswa: {{ $jmlMahasiswa }}</h5>
                <h5>Statistik Gender:</h5>
                <ul>
                    <li>Jumlah Mahasiswa Laki-laki: {{ $countLaki }}</li>
                    <li>Jumlah Mahasiswa Perempuan: {{ $countPerempuan }}</li>
                </ul>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Tanggal Lahir</th>
                    <th>Gender</th>
                    <th>Usia</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswas as $mahasiswa)
                    <tr>
                        <td>{{ $mahasiswa->nim }}</td>
                        <td>{{ $mahasiswa->nama }}</td>
                        <td>{{ $mahasiswa->alamat }}</td>
                        <td>{{ $mahasiswa->tanggal_lahir }}</td>
                        <td>{{ $mahasiswa->gender }}</td>
                        <td>{{ $mahasiswa->usia }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Tambahkan script JavaScript Bootstrap sebelum tag penutup body -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
