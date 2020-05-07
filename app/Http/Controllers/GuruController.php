<?php

namespace App\Http\Controllers;

use App\Imports\Importsiswa;
use App\Siswa;
use App\User;
use App\Guru;
use PDF;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;


class GuruController extends Controller
{
    //
    public function index()
    {
        return view('guru.index', [
            'data' => Guru::cursor()
        ]);
    }
    public function importSiswa(Request $req)
    {
        Excel::import(new Importguru, request()->file('file'));
        return back();
    }
    public function lihatguru($id)
    {
        $data = Guru::find($id);
        return view('guru.lihat', [
            'data' => $data
        ]);
    }

    public function hapus($id)
    {
        User::find($id)->delete();
        return back();
    }
    public function ubah($id)
    {
        $datauser = User::find($id);
        return view('guru.ubah', ['datauser' => $datauser]);
    }
    public function ubahproses(Request $req)
    {

        $user = User::find($req->user_id);
        $user->email = $req['kg'] . "@smkn7ptk.sch.id";
        $user->name = $req['name'];
        if ($req['password']) {
            $user->password = bcrypt($req['password']);
        }
        $user->save();
        $guru = Guru::where('user_id', $req->user_id)->first();
        $guru->nrp = $req['nrp'];
        $guru->nama = $req['nama'];
        $guru->nip = $req['nip'];
        $guru->nuptk = $req['nuptk'];
        $guru->jenkel = $req['jenkel'];
        $guru->agama = $req['agama'];
        $guru->tempat_lahir = $req['tempat'];
        $guru->tanggal_lahir = $req['tanggal'];
        $guru->tanggal_mtugas = $req['tanggal_mtugas'];
        $guru->tmt = $req['tmt'];
        $guru->pendidikan = $req['pendidikan'];
        $guru->jurusan = $req['jurusan'];
        $guru->thn_tamat = $req['thn_tamat'];
        $guru->tgl_sk = $req['tgl_sk'];
        $guru->alamat = $req['alamat'];
        $guru->nohp = $req['nohp'];
        $guru->tugas_tambah = $req['tugas_tambah'];
        $guru->save();
        return redirect()->route('guru.index');
    }
}
