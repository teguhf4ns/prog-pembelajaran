<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = [
        'user_id',
        'nis',
        'nisn',
        'tempat_lahir',
        'tgl_lahir',
        'pstudi',
        'jurusan',
        'kelas',
        'wali',
        'agama',
        'jen_kel',
        'alamat',
        'no_hp',
        'asal_sklh',
        'ayah',
        'kerja_ayah',
        'ibu',
        'kerja_ibu',
        'email',
        'password',
        'fotosiswa'
    ];
       
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
