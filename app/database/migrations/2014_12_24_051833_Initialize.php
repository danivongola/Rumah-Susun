<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Initialize extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{


        Schema::create('tbdetailuser', function(Blueprint $table)
        {
           $table->increments('id');
           $table->string('nama');
           $table->integer('id_user')->unsigned();
           $table->string('nik');
           $table->string('alamat');
           $table->string('no_telepon');
           $table->string('pekerjaan');
           $table->string('gaji_bulanan');
           $table->date('tanggal_masuk');
           $table->date('tanggal_keluar');
           $table->string('status');
           $table->string('jumlah_keluarga');
           $table->timestamps();
        });

        Schema::create('tbbiaya', function(Blueprint $table)
        {
           $table->increments('id');
           $table->integer('id_kamar')->unsigned();
           $table->string('listrik');
           $table->string('air');
           $table->timestamps();

        });

        Schema::create('tbkamar', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('no_kamar');
            $table->integer('lantai');
            $table->integer('id_user');
            $table->string('harga_kamar');
            $table->timestamps();

        });

        Schema::create('tbkeluhan', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('id_user')->unsigned();
            $table->string('keluhan');
            $table->string('tanggal_keluhan');
            $table->string('status_keluhan');
            $table->timestamps();
        });


        Schema::create('tbpenjadwalan', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('id_user')->unsigned();
            $table->date('tanggal_wawancara');
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

         Schema::drop("tbkamar");
		 Schema::drop("tbbiaya");
         Schema::drop("tbkeluhan");
         Schema::drop("tbpenjadwalan");
         Schema::drop("tbdetailuser");



	}

}
