<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_customer', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('phone');
            $table->string('ctype');
            $table->string('cgroup');
            $table->string('kecam');
            $table->string('kota');
            $table->string('email');
            $table->string('sex');
            $table->string('title');
            $table->string('adrbook');
            $table->string('alamat');
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
        Schema::dropIfExists('mst_customer');
    }
}
