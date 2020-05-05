<?php

namespace App\Http\Controllers;

use App\Imports\Importsiswa;
use App\Siswa;
use App\User;
use PDF;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;


class SiswaController extends Controller
{
    //
    public function index()
    {
        return view('siswa.index', [
            'data' => Siswa::cursor()
        ]);
    }
    public function importSiswa(Request $req)
    {
        Excel::import(new Importsiswa, request()->file('file'));
        return back();
    }
    public function lihatsiswa($id)
    {
        $data = Siswa::find($id);
        return view('siswa.lihat', [
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
        return view('siswa.ubah', ['datauser' => $datauser]);
    }
    public function ubahproses(Request $req)
    {

        $user = User::find($req->user_id);
        $user->email = $req['nisn'] . "@smkn7ptk.sch.id";
        $user->name = $req['name'];
        if ($req['password']) {
            $user->password = bcrypt($req['password']);
        }
        $user->save();
        $siswa = Siswa::where('user_id', $req->user_id)->first();
        $siswa->nis = $req['nis'];
        $siswa->nisn = $req['nisn'];
        $siswa->tempat_lahir = $req['tempat'];
        $siswa->tanggal_lahir = $req['tanggal'];
        $siswa->pstudi = $req['pstudi'];
        $siswa->jurusan = $req['jurusan'];
        $siswa->kelas = $req['kelas'];
        $siswa->wali = $req['wali'];
        $siswa->agama = $req['agama'];
        $siswa->jen_kel = $req['jen_kel'];
        $siswa->alamat = $req['alamat'];
        $siswa->no_hp = $req['no_hp'];
        $siswa->asal_sklh = $req['asal_sklh'];
        $siswa->ayah = $req['ayah'];
        $siswa->kerja_ayah = $req['kerja_ayah'];
        $siswa->ibu = $req['ibu'];
        $siswa->kerja_ibu = $req['kerja_ibu'];
        $siswa->email = $req['email'];
        $siswa->password = $req['password'];
        $siswa->fotosiswa = $req['fotosiswa'];
        $siswa->save();
        return redirect()->route('siswa.index');
    }
}
