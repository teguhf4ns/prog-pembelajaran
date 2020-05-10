@extends('layouts.master2')

@section('content')

<div class="main">
    <!-- MAIN CONTENT --> 
	<div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <!-- BASIC TABLE -->

                    <div class="panel">
                        <div class="panel-heading">
                        <h3 class="panel-title">Data Tendik SMK Negeri 7 Pontianak</h3><br>
                            <div class="right">
                                <a href="{{ url('/home') }}"><img src="{{asset('logo/Icon-Back.png')}}" height="40px" width="40px" class="img-circle" alt="Avatar"></a>
                                <a href="{{ url('/guru/create') }}" class="btn btn-success btn-toastr"><i class="far fa-edit"></i> Tambah Tendik</a>
                                <a href="{{ url('/guru/export_excel')}}" class="btn btn-info btn-toastr" target="_blank"><i class="fa fa-download fa-sm fa-fw mr-2"></i> EXPORT EXCEL</a>
                    
                                {{-- notifikasi form validasi --}}
                                    @if ($errors->has('file'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('file') }}</strong>
                                    </span>
                                @endif

                                {{-- notifikasi sukses --}}
                                @if ($sukses = Session::get('sukses'))
                                <div class="alert alert-success alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button> 
                                    <strong>{{ $sukses }}</strong>
                                </div>
                                @endif

                                <a href="#importExcel" class="btn btn-primary btn-toastr" data-toggle="modal" data-target="#importExcel">
                                <i class="fa fa-upload fa-sm fa-fw mr-2"></i> IMPORT EXCEL</a>

                                <!-- Import Excel -->
                                <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                    <form method="post" action="/guru/import_excel" enctype="multipart/form-data">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
                                        </div>
                                        <div class="modal-body">

                                            {{ csrf_field() }}

                                            <label>Pilih file excel</label>
                                            <div class="form-group">
                                            <input type="file" name="file" required="required">
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-info" data-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-primary">Import</button>
                                        </div>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                                </div>
                            </div> 
                            <br>
                        

                        <form class="right" method="get" action="/guru">
                            <div class="input-group col-md-4">
                            <input name="cari" type="search" value="" class="form-control right" placeholder="Cari ...">
                            <span class="input-group-btn right"><button type="submit" class="btn btn-primary"><i class="fas fa-search fa-sm"></i></button></span>
                            </div>
                        </form>
                        <br>
                        <div class="panel-body">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <p>
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Nama Guru</th>
                                                        <th>N R P</th>
                                                        <th>Detail</th>
                                                    </tr>
                                                </thead>
                                                @foreach( $data as $guru )
                                                <tbody>
                                                    <tr>
                                                        <td>{{ $guru->nama }}</td>
                                                        <td>{{ $guru->nrp }}</td>
                                                        <td><a href="/guru/{{ $guru->id }}" class="label label-primary"><i class="fa fa-info-circle"></i> Detail</a></td>
                                                    </tr>
                                                </tbody>
                                                @endforeach
                                            </table>
                                        </p>
                                    </div>
                                </div>
                                @push('script')
                                    <script>
                                        $(document).ready( function () {
                                            $('#table').DataTable();
                                        } );
                                    </script>
                                @endpush
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

@endsection