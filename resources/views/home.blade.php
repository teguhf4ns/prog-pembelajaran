@extends('layouts.master2')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Aplikasi Pembelajaran</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->
    <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Input Data</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">Guru</div>
            </div>
            <div class="col-auto">
                <i class="fas fa-upload fa-2x text-gray-600"></i>
            </div>
            </div>
        </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Input Data</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">Siswa</div>
            </div>
            <div class="col-auto">
                <i class="fas fa-upload fa-2x text-gray-600"></i>
            </div>
            </div>
        </div>
        </div>
    </div>
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Input Data</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">Mapel</div>
            </div>
            <div class="col-auto">
                <i class="fas fa-upload fa-2x text-gray-600"></i>
            </div>
            </div>
        </div>
        </div>
        </div>
    </div>
</div>
@endsection
