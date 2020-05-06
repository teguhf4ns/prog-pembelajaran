@extends('layouts.master2')

@section('content')

<div class="container-fluid">

<div class="row">
    <!-- Input Data Siswa -->
    <div class="col-xl-8 col-md-8 mb-4">
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
                </div>
            </form>
            </div>
        </div>
        </div>
    </div>
</div>
<!-- DataTales Example -->
<div class="panel panel-headline">
    <div class="panel-heading">
        <h3 class="panel-title">DATA SISWA SMK NEGERI 7 PONTIANAK</h3>
        <p class="panel-subtitle">Tahun Pelajaran 2019 - 2020</p>
    </div>
    <div class="panel-body">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <p>
                        <table class="table" id="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>FOTO</th>
                                    <th>Nama Siswa</th>
                                    <th>Jurusan</th>
                                    <th>Kelas</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $d)
                                <tr>
                                    <td scope="row">{{$loop->iteration}}</td>
                                    <td>
                            @if(file_exists('foto/'.$d->nisn.'.jpg'))
                            <img src="{{asset('foto/'.$d->nisn.'.jpg')}}" height="50px"  />
                            @else
                            <img src="{{asset('foto/nofoto.png')}}" height="50px" />
                            @endif
                                    </td>
                                    <td>{{ $d->user->name }}</td>
                                    <td>{{ $d->jurusan }}</td>
                                    <td>{{ $d->kelas }}</td>
                                    <td><a href="{{route('siswa.lihat',$d->id)}}" class="label label-primary"><i class="fa fa-info-circle"></i> detail</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@push('script')
    <script>
        $(document).ready( function () {
            $('#table').DataTable();
        } );
    </script>
@endpush
@endsection