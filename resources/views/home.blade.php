@extends('layouts.master2')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Aplikasi Pembelajaran</h1>
    <a href="{{route('home')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-back fa-sm text-white-50"></i> KEMBALI</a>
    </div>

    <!-- Content Row -->
    <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-10 col-md-8 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Input Data</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">GURU</div>
            </div>
            <form action="#" class="form-inline" method="post" enctype="multipart/form-data">
                @csrf
                <div class="input-group">
                    <input type="file" name="file" class="form-control-file" />
                </div>
                <div class="col-auto">
                    <span class="input-group-btn"><button class="btn btn-primary btn-toastr" type="submit" value="Import"><i class="fas fa-upload fa-1x text-gray-100"></i> Import</button></span>
                    <a href="" class="input-group-btn"><button class="btn btn-success btn-toastr" type="submit" value="lihat"><i class="fas fa-info-circle fa-1x text-gray-100"></i> Lihat</button></a> 
                </div>
            </form>
            </div>
        </div>
        </div>
    </div>
    </div>

    <div class="row">
    <!-- Input Data Siswa -->
    <div class="col-xl-10 col-md-8 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Input Data</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">SISWA</div>
            </div>
            <form action="{{route('siswa.import')}}" class="form-inline" method="post" enctype="multipart/form-data">
                @csrf
                <div class="input-group">
                    <input type="file" name="file" class="form-control-file" />
                </div>
                <div class="col-auto">
                    <span class="input-group-btn"><button class="btn btn-primary btn-toastr" type="submit" value="Import"><i class="fas fa-upload fa-1x text-gray-100"></i> Import</button></span> 
                    <a href="" class="input-group-btn"><button class="btn btn-success btn-toastr" type="submit" value="lihat"><i class="fas fa-info-circle fa-1x text-gray-100"></i> Lihat</button></a>
                </div>
            </form>
            </div>
        </div>
        </div>
    </div>
    </div>

    <div class="row">
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-10 col-md-8 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Input Data</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">MAPEL</div>
            </div>
            <form action="#" class="form-inline" method="post" enctype="multipart/form-data">
                @csrf
                <div class="input-group">
                    <input type="file" name="file" class="form-control-file" />
                </div>
                <div class="col-auto">
                    <span class="input-group-btn"><button class="btn btn-primary btn-toastr" type="submit" value="Import"><i class="fas fa-upload fa-1x text-gray-100"></i> Import</button></span>
                    <a href="" class="input-group-btn"><button class="btn btn-success btn-toastr" type="submit" value="lihat"><i class="fas fa-info-circle fa-1x text-gray-100"></i> Lihat</button></a> 
                </div>
            </form>
            </div>
        </div>
        </div>
        </div>
    </div>
</div>
@endsection
