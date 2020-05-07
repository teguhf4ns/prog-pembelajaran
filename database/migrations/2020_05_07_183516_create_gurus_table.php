<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gurus', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->string('nama')->nullable();
            $table->string('nip')->nullable();
            $table->string('nuptk')->nullable();
            $table->enum('jenkel', ['Laki - Laki', 'Perempuan'])->nullable();
            $table->enum('agama', ['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha', 'Konghucu', 'Penghayat'])->nullable();
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->date('tanggal_mtugas');
            $table->date('tmt')->nullable();
            $table->string('pendidikan');
            $table->string('jurusan');
            $table->string('thn_tamat');
            $table->string('tgl_sk')->nullable();
            $table->string('alamat')->nullable();
            $table->char('no_hp')->nullable();
            $table->string('tugas_tambah')->nullable();
            $table->string('fotoguru')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gurus');
    }
}
