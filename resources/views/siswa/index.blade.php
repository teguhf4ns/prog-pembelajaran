@extends('layouts.master2')

@section('content')

<div class="main">
    <!-- MAIN CONTENT -->
      
      
	<div class="main-content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">

          <!-- Data Tables -->
          
          <div class="panel panel-headline">
              <div class="panel-heading">
                  <h3 class="panel-title">DATA SISWA SMK NEGERI 7 PONTIANAK</h3>
                  <p class="panel-subtitle">Tahun Pelajaran 2019 - 2020</p>
              </div>
              <!-- BASIC TABLE -->
              <hr>
            <div class="panel">
              <div class="panel-heading">
                <div class="right">
                    <a href="{{ url('/home') }}" class="btn btn-primary btn-toastr">Depan</a>
					          <a href="{{ url('/siswa/create') }}" class="btn btn-success btn-toastr">Tambah Siswa</a>
                    <a href="{{ url('/siswa/export_excel')}}" class="btn btn-info btn-toastr" target="_blank">EXPORT EXCEL</a>
             
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

              <a href="#importExcel" class="btn btn-primary" data-toggle="modal" data-target="#importExcel">
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
          <hr>
              <form class="right" method="get" action="/siswa">
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
                                  <table class="table" id="table">
                                      <thead>
                                          <tr>
                                              <th>No</th>
                                              <th>Foto</th>
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
                    
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection
