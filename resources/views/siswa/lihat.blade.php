@extends('layouts.master')

@section('content')

<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<div class="panel panel-profile">
				<div class="clearfix">
					<!-- LEFT COLUMN -->
					<div class="profile-left">
						<!-- PROFILE HEADER -->
						<div class="profile-info">
							<!-- <h4 class="heading">Action</h4> -->
							<ul class="list-inline">
								<li><a href="{{ url('/siswa') }}" class="btn btn-primary btn-sm"><i class="lnr lnr-back"></i>  Kembali</a>
                                    <a href="{{route('siswa.edit',$d->user_id)}}" class="label label-success"><i class="lnr lnr-pencil"></i> Ubah</a>
                                    <a href="{{route('siswa.hapus',$d->user_id)}}" onclick="return confirm('Yakin ?')" class="label label-danger"><i class="lnr lnr-trash"></i> Hapus</a></li>
							</ul>
						</div>
						<div class="profile-header">
							<div class="overlay"></div>
							<div class="profile-main">
								<img src="{{asset('foto siswa/'.$siswa->fotosiswa)}}" width="90px" class="img-circle" alt="Avatar">
								<h3 class="name">{{ $siswa->nama }}</h3>
								<span class="online-status status-available">{{ $siswa->jen_kel }}</span>
							</div>
							<div class="profile-stat">
								<div class="row">
									<div class="col-md-8 stat-item">
									{{ $siswa->kelas }} <span>{{ $siswa->jurusan }}</span>
									</div>
									<div class="col-md-4 stat-item">
									NIS <span>{{ $siswa->nis }}</span>
									</div>
								</div>
							</div>
						</div>
						<!-- END PROFILE HEADER -->
						<!-- PROFILE DETAIL -->
						<div class="profile-detail">
							<div class="profile-info">
								<h4 class="heading">{{ $siswa->nama }}</h4>
								<ul class="list-unstyled list-justify">
									<li>Kelas <span>{{ $siswa->kelas }}</span></li>
									<li>Jurusan <span>{{ $siswa->jurusan }}</span></li>
								</ul>
							</div>
							<div class="profile-info">
								<h4 class="heading">Social</h4>
								<ul class="list-inline social-icons">
									<li><a href="https://facebook.com" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
									<li><a href="https://twitter.com" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
									<li><a href="https://google.com" class="google-plus-bg"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="https://youtube.com" class="youtube-bg"><i class="fa fa-youtube"></i></a></li>
									<li><a href="https://github.com" class="github-bg"><i class="fa fa-github"></i></a></li>
								</ul>
							</div>
						</div>
						<!-- END PROFILE DETAIL -->
					</div>
					<!-- END LEFT COLUMN -->
					<!-- RIGHT COLUMN -->
					<div class="profile-right">
						<h4 class="heading">Sekilas tentang {{ $siswa->nama }}</h4>
						<p>{{ $siswa->nama }} adalah anak {{ $siswa->jen_kel }} dari pasangan Bapak {{ $siswa->ayah }} dan Ibu {{ $siswa->ibu }}, yang lahir di {{ $siswa->tempat_lahir }} pada tanggal {{ $siswa->tgl_lahir }} {{ $siswa->bulan_lahir }} {{ $siswa->tahun_lahir }}.</p>
						<p>{{ $siswa->nama }} pernah bersekolah di {{ $siswa->asal_sklh }} dan sekarang bersekolah di SMK Negeri 7 Pontianak kelas {{ $siswa->kelas }} Jurusan {{ $siswa->jurusan }}.</p>
						<!-- TABBED CONTENT -->
						<div class="custom-tabs-line tabs-line-bottom left-aligned">
							<ul class="nav" role="tablist">
								<li class="active"><a href="#tab-bottom-left1" role="tab" data-toggle="tab" aria-expanded="true"><i class="fa fa-info-circle"></i> Identitas</a></li>
								<li class=""><a href="#tab-bottom-left2" role="tab" data-toggle="tab" aria-expanded="false"><i class="fa fa-credit-card"></i> Kartu Pelajar<span class="badge"></span></a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="tab-bottom-left1">
								<ul class="list-unstyled activity-timeline">
									<li>
										<i class="lnr lnr-user activity-icon"></i>
										<p>{{ $siswa->nama }} <a href="#"></a> <span class="timestamp">Nama Lengkap</span></p>
									</li>
									<li>
										<i class="fa fa-mars-stroke activity-icon"></i>
										<p>{{ $siswa->jen_kel }} <a href="#"></a> <span class="timestamp">Jenis Kelamin</span></p>
									</li>
									<li>
										<i class="fa fa-credit-card activity-icon"></i>
										<p>{{ $siswa->nis }} / {{ $siswa->nisn }}<a href="#"></a> <a href="#"></a> <span class="timestamp">NIS / NISN</span></p>
									</li>
									<li>
										<i class="fa fa-calendar activity-icon"></i>
										<p>{{ $siswa->tempat_lahir }}, {{ $siswa->tgl_lahir }} {{ $siswa->bulan_lahir }} {{ $siswa->tahun_lahir }} <a href="#"></a>  <a href="#"></a> <span class="timestamp">Tempat, Tanggal Lahir</span></p>
									</li>
									<li>
										<i class="fa fa-heart activity-icon"></i>
										<p>{{ $siswa->agama }} <a href="#"></a> <a href="#"></a> <span class="timestamp">Agama</span></p>
									</li>
									<li>
										<i class="fa fa-home activity-icon"></i>
										<p>{{ $siswa->alamat }} <a href="#"></a> <a href="#"></a> <span class="timestamp">Alamat</span></p>
									</li>
									<li>
										<i class="fa fa-phone activity-icon"></i>
										<p>{{ $siswa->no_hp }} <a href="#"></a> <a href="#"></a> <span class="timestamp">No. HandPhone</span></p>
									</li>
									<li>
										<i class="lnr lnr-store activity-icon"></i>
										<p>{{ $siswa->asal_sklh }} <a href="#"></a> <a href="#"></a> <span class="timestamp">Asal Sekolah </span></p>
									</li>
									<li>
										<i class="fa fa-envelope activity-icon"></i>
										<p>{{ $siswa->email }} <a href="#"></a> <a href="#"></a> <span class="timestamp">E-Mail</span></p>
									</li>
									<li>
										<i class="lnr lnr-mustache activity-icon"></i>
										<p>{{ $siswa->ayah }} / {{ $siswa->kerja_ayah }} <a href="#"></a> <a href="#"></a> <span class="timestamp">Nama Ayah / Pekerjaan</span></p>
									</li>
									<li>
										<i class="lnr lnr-smile activity-icon"></i>
										<p>{{ $siswa->ibu }} / {{ $siswa->kerja_ibu }} <a href="#"></a> <a href="#"></a> <span class="timestamp">Nama Ibu / Pekerjaan</span></p>
									</li>
							</div>
							<div class="tab-pane fade" id="tab-bottom-left2">
								<ul class="list-unstyled activity-timeline">											
									
									<div class="profile-header">
										<div class="overlay"></div>
										<div class="profile-stat">
											<div class="row">
												<div class="col-md-9 stat-item">
													
												</div>
											</div>
										</div>
										<div class="profile-main">
											<img src="{{asset('foto siswa/'.$siswa->fotosiswa)}}" width="90px" class="img-circle">
											<h3 class="name">{{ $siswa->nama }}</h3>
											<span class="online-status status-available">{{ $siswa->jen_kel }}</span>
											<div class="col-md-4 stat-item">
											NIS <span>{{ $siswa->nis }}</span>
											</div>
										</div>
									</div>
							</div>
						</div>
						<!-- END TABBED CONTENT -->
					</div>
					<!-- END RIGHT COLUMN -->
				</div>
			</div>
		</div>
	</div>
	<!-- END MAIN CONTENT -->
	</div>
@endsection
