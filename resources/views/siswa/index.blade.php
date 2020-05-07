@extends('layouts.master2')

@section('content')

<div class="main">
    <!-- MAIN CONTENT -->
      
      
	<div class="main-content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <!-- BASIC TABLE -->
              
              <form class="right" method="get" action="/siswa">
                <div class="input-group col-md-4">
                  <input name="cari" type="search" value="" class="form-control right" placeholder="Cari ...">
                  <span class="input-group-btn right"><button type="submit" class="btn btn-primary">Cari</button></span>
                </div>
              </form>

            <div class="panel">
              <div class="panel-heading">
                <h2 class="panel-title">Data Siswa SMK Negeri 7 Pontianak</h2>
                <div class="right">
                    <a href="{{ url('/home') }}" class="btn btn-primary btn-toastr">Depan</a>
					<a href="{{ url('/siswa/create') }}" class="btn btn-success btn-toastr">Tambah Siswa</a>
                    <a href="{{ url('/siswa/export_excel')}}" class="btn btn-success btn-toastr" target="_blank">EXPORT EXCEL</a>
             
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

              <a href="#importExcel" type="button" class="btn btn-primary btn-toastr" data-toggle="modal" data-target="#importExcel">
                IMPORT EXCEL
              </a>

              <!-- Import Excel -->
              <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <form method="post" action="/siswa/import_excel" enctype="multipart/form-data">
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
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Import</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>

            </div>
          </div>
                
		<div class="panel-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Nama Siswa</th>
                        <th>N I S</th>
                        <th>Kelas</th>
                        <th>Jurusan</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                @foreach( $siswa as $siswa )
                <tbody>
                    <tr>
                        <td>{{ $siswa->nama }}</td>
                        <td>{{ $siswa->nis }}</td>
                        <td>{{ $siswa->kelas }}</td>
                        <td>{{ $siswa->jurusan }}</td>
                        <td><a href="/siswa/{{ $siswa->id }}" class="label label-primary"><i class="fa fa-info-circle"></i> Detail</a></td>
                    </tr>
                </tbody>
                @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>








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