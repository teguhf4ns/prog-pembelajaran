<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $fillable = [
        'user_id',
        'nrp',
        'nama',
        'nip',
        'nuptk',
        'jenkel',
        'agama',
        'tempat_lahir',
        'tanggal_lahir',
        'tanggal_mtugas',
        'tmt',
        'pendidikan',
        'jurusan',
        'thn_tamat',
        'tgl_sk',
        'alamat',
        'no_hp',
        'tugas_tambah',
        'fotoguru'
    ];
       
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
