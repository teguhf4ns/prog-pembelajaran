@extends('layouts.master2')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Menu Aplikasi Pembelajaran</h1>
    <a href="{{route('home')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-back fa-sm text-white-50"></i> KEMBALI</a>
    </div>

    <!-- Content Row -->

    <div class="row">

        <div class="col-lg-6">
        
        <!-- Menu Guru -->
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Pendidik dan Tenaga Kependidikan</h6>
            <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" x-placement="top-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(17px, -5px, 0px);">
                <div class="dropdown-header">Pendidik dan Tendik:</div>
                <a class="dropdown-item" href="{{ route('guru.index') }}">Data Guru</a>
                <a class="dropdown-item" href="#">Silabus</a>
                <a class="dropdown-item" href="#">Prota</a>
                <a class="dropdown-item" href="#">Prosem</a>
                <a class="dropdown-item" href="#">I P K</a>
                <a class="dropdown-item" href="#">K K M</a>
                <a class="dropdown-item" href="#">R P P</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Kehadiran Guru</a>
                </div>
            </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
            <i>“Orang hebat bisa melahirkan beberapa karya bermutu, tapi guru yang bermutu dapat melahirkan ribuan orang-orang yang hebat..."</i>
            <br>
            <i>"Guru adalah pahlawan tanpa tanda jasa. Bukan karena tidak berjasa tapi karena kita tidak bisa membalas jasanya..."</i>
            </div>
        </div>


        <!-- Menu Siswa -->
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-success">Siswa</h6>
            <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" x-placement="top-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(17px, -5px, 0px);">
                <div class="dropdown-header">Siswa:</div>
                <a class="dropdown-item" href="{{ route('siswa.index') }}">Data Siswa</a>
                <a class="dropdown-item" href="#">Presensi Siswa</a>
                <a class="dropdown-item" href="#">Penilaian Siswa</a>
                <div class="dropdown-divider">Grafik</div>
                <a class="dropdown-item" href="#">Grafik Siswa berdasarkan Gender</a>
                <a class="dropdown-item" href="#">Grafik Siswa berdasarkan Agama</a>
                <a class="dropdown-item" href="#">Grafik Siswa berdasarkan Kelas</a>
                </div>
            </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
            <i>“Setiap siswa memiliki bakat dibidang tertentu, Guru harus dapat menemukan dan menggali apa bakat mereka...”</i>
            </div>
        </div>
        </div>

        <div class="col-lg-6">

        <!-- Mata Pelajaran -->
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-danger">Mata Pelajaran</h6>
            <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" x-placement="top-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(17px, -5px, 0px);">
                <div class="dropdown-header">Menu:</div>
                <a class="dropdown-item" href="{{ route('mapel.index') }}">Data Mata Pelajaran</a>
                <a class="dropdown-item" href="#">Data Guru Mata Pelajaran</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Jadwal Pelajaran</a>
                </div>
            </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
            <i>“Apa yang ingin dipelajari murid sama pentingnya dengan apa yang ingin diajarkan guru...”</i>
            <br><i>“Seorang guru itu adalah orang yang mengajar untuk menciptakan semua profesi...”</i>
            </div>
        </div>

        <!-- Grafik -->
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Grafik</h6>
            <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" x-placement="top-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(17px, -5px, 0px);">
                <div class="dropdown-header">Menu Grafik:</div>
                <a class="dropdown-item" href="#">Guru berdasarkan Gender</a>
                <a class="dropdown-item" href="#">Guru berdasarkan Pendidikan</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Siswa berdasarkan Gender</a>
                <a class="dropdown-item" href="#">Siswa berdasarkan Agama</a>
                <a class="dropdown-item" href="#">Siswa berdasarkan jumlah siswa/kelas</a>
                </div>
            </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
            <i>“Seorang guru adalah orang yang mengajarkan kemudahan bukan untuk menjelaskan kerumitan...”</i>
            
            </div>
        </div>

        </div>

    </div>

</div>

@endsection
