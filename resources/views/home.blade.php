@extends('layouts.master2')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Sistem Aplikasi Pembelajaran SMK Negeri 7 Pontianak</h1>
    <a href="{{route('home')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-back fa-sm text-white-50"></i> KEMBALI</a>
    </div>

    <!-- Content Row -->

    <div class="row">
        <!-- Data Isian -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="dropdown mb-4">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{asset('logo/taskurikulum.png')}}" height="40px" class="img-circle" alt="Avatar"> Data Isian
                            </button>
                            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 38px, 0px); top: 0px; left: 0px; will-change: transform;">
                                <a class="dropdown-item" href="{{ route('guru.index') }}"><img src="{{asset('logo/karir_icon_color.png')}}" height="35px" width="35" class="img-circle" alt="Avatar"> Kepegawaian</a>
                                <a class="dropdown-item" href="{{ route('siswa.index') }}"><img src="{{asset('logo/icon_anak_smk.png')}}" height="35px" width="35" class="img-circle" alt="Avatar"> Data Siswa</a>
                                <a class="dropdown-item" href="{{ route('mapel.index') }}"><img src="{{asset('logo/mapel.png')}}" height="35px" width="35" class="img-circle" alt="Avatar"> Mata Pelajaran</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>

        <!-- Perencanaan -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="dropdown mb-4">
                            <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{asset('logo/taskurikulum.png')}}" height="40px" class="img-circle" alt="Avatar"> Perencanaan
                            </button>
                            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 38px, 0px); top: 0px; left: 0px; will-change: transform;">
                                <a class="dropdown-item" href="#"><img src="{{asset('logo/silabus.jpeg')}}" height="30px" width="35" class="img-circle" alt="Avatar"> Silabus</a>
                                <a class="dropdown-item" href="#"><img src="{{asset('logo/kd.jpeg')}}" height="35px" width="35" class="img-circle" alt="Avatar"> Kompetensi Dasar</a>
                                <a class="dropdown-item" href="#"><img src="{{asset('logo/book.png')}}" height="35px" width="35" class="img-circle" alt="Avatar"> Indikator Pencapaian</a>
                                <a class="dropdown-item" href="#"><img src="{{asset('logo/buku adm.png')}}" height="35px" width="35" class="img-circle" alt="Avatar"> Prog. Tahunan</a>
                                <a class="dropdown-item" href="#"><img src="{{asset('logo/buku adm.png')}}" height="35px" width="35" class="img-circle" alt="Avatar"> Prog. Semester</a>
                                <a class="dropdown-item" href="#"><img src="{{asset('logo/kkm.png')}}" height="35px" width="35" class="img-circle" alt="Avatar"> K K M</a>
                                <a class="dropdown-item" href="#"><img src="{{asset('logo/rpp.png')}}" height="35px" width="35" class="img-circle" alt="Avatar"> Rncn Prog. Pembelajaran</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>

        <!-- Pelaksanaan -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="dropdown mb-4">
                            <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{asset('logo/taskurikulum.png')}}" height="40px" class="img-circle" alt="Avatar"> Pelaksanaan
                            </button>
                            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 38px, 0px); top: 0px; left: 0px; will-change: transform;">
                                <a class="dropdown-item" href="#"><img src="{{asset('logo/presensi.png')}}" height="35px" width="35" class="img-circle" alt="Avatar"> Jadwal Saya</a>
                                <a class="dropdown-item" href="#"><img src="{{asset('logo/presensi.jpeg')}}" height="35px" width="35" class="img-circle" alt="Avatar"> Presensi Siswa</a>
                                <a class="dropdown-item" href="#"><img src="{{asset('logo/jurnal.png')}}" height="35px" width="35" class="img-circle" alt="Avatar"> Jurnal Mengajar</a>
                                <a class="dropdown-item" href="#"><img src="{{asset('logo/mapel.png')}}" height="35px" width="35" class="img-circle" alt="Avatar"> Nilai Kehadiran & Sikap</a>
                                <a class="dropdown-item" href="#"><img src="{{asset('logo/mapel.png')}}" height="35px" width="35" class="img-circle" alt="Avatar"> Nilai Tugas</a>
                                <a class="dropdown-item" href="#"><img src="{{asset('logo/mapel.png')}}" height="35px" width="35" class="img-circle" alt="Avatar"> Nilai Ulangan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>

        <!-- Penilaian -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="dropdown mb-4">
                            <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{asset('logo/taskurikulum.png')}}" height="40px" class="img-circle" alt="Avatar"> Penilaian
                            </button>
                            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 38px, 0px); top: 0px; left: 0px; will-change: transform;">
                                <a class="dropdown-item" href="#"><img src="{{asset('logo/raportk13.png')}}" height="35px" width="35" class="img-circle" alt="Avatar"> Raport Semester 1</a>
                                <a class="dropdown-item" href="#"><img src="{{asset('logo/raportk13.png')}}" height="35px" width="35" class="img-circle" alt="Avatar"> Raport Semester 2</a>
                                <a class="dropdown-item" href="#"><img src="{{asset('logo/raportk13.png')}}" height="35px" width="35" class="img-circle" alt="Avatar"> Raport Semester 3</a>
                                <a class="dropdown-item" href="#"><img src="{{asset('logo/raportk13.png')}}" height="35px" width="35" class="img-circle" alt="Avatar"> Raport Semester 4</a>
                                <a class="dropdown-item" href="#"><img src="{{asset('logo/raportk13.png')}}" height="35px" width="35" class="img-circle" alt="Avatar"> Raport Semester 5</a>
                                <a class="dropdown-item" href="#"><img src="{{asset('logo/raportk13.png')}}" height="35px" width="35" class="img-circle" alt="Avatar"> Raport Semester 6</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>

    <div class="row">

        <div class="col-lg-6">

            <!-- Visi Sekolah -->
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-danger"><i>Visi SMK Negeri 7 Pontianak</i></h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <i>“Visi sekolah nanti diisi di sini...”</i>
                </div>
            </div>

            <!-- Misi Sekolah -->
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-success"><i>Misi SMK Negeri 7 Pontianak</i></h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <i>“Misi sekolah nanti diisi di sini...”</i>
                </div>
            </div>
            
        </div>
        <div class="col-lg-6">
        
            <!-- Menu Guru -->
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-info"><i>Penyemangat ...</i></h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <i>“Orang hebat bisa melahirkan beberapa karya bermutu, tapi guru yang bermutu dapat melahirkan ribuan orang-orang yang hebat..."</i><br><br>
                    <i>"Guru adalah pahlawan tanpa tanda jasa. Bukan karena tidak berjasa tapi karena kita tidak bisa membalas jasanya..."</i><br><br>
                    <i>“Setiap siswa memiliki bakat dibidang tertentu, Guru harus dapat menemukan dan menggali apa bakat mereka...”</i><br><br>
                    <i>“Apa yang ingin dipelajari siswa sama pentingnya dengan apa yang ingin diajarkan guru...”</i><br><br>
                    <i>“Seorang guru adalah orang yang mengajarkan kemudahan bukan untuk menjelaskan kerumitan...”</i><br><br>
                    <i>“Seorang guru itu adalah orang yang mengajar untuk menciptakan semua profesi...”</i><br><br>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
