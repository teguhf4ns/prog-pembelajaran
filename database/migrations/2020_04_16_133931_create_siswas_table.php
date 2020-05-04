<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->string('nis')->nullable();
            $table->string('nisn')->nullable();
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('pstudi');
            $table->string('jurusan');
            $table->string('kelas');
            $table->string('wali')->nullable();
            $table->enum('agama', ['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha', 'Konghucu', 'Penghayat'])->nullable();
            $table->enum('jenkel', ['Laki - Laki', 'Perempuan'])->nullable();
            $table->string('alamat');
            $table->char('no_hp')->nullable;
            $table->string('asal_sklh');
            $table->string('ayah');
            $table->string('kerja_ayah');
            $table->string('ibu');
            $table->string('kerja_ibu');
            $table->string('email');
            $table->string('password');
            $table->string('fotosiswa')->nullable;
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswas');
    }
}
