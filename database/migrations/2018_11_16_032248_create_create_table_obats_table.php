<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreateTableObatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('create_table_obats', function (Blueprint $table) {
            $table->increments('id');
            $table->String('nama_obat');
            $table->integer('harga');
            $table->integer('stok');
            $table->date('expired_date');
            $table->date('production_date');
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
        Schema::dropIfExists('create_table_obats');
    }
}
