<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventori', function (Blueprint $table) {
            $table->id();
            $table->integer('stok')->default(0);

            $table->foreignId('id_admin')->constrained('admin');
            $table->foreignId('id_buku')->constrained('buku');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventori');
    }
}
