<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('clients', function (Blueprint $table) {
        $table->id();

        $table->string('name');
        $table->string('addrees');
        $table->string('city');
        $table->string('numIdenficication');
        $table->string('phone');
        $table->string('email')->unique();
        $table->longText('contract');
        $table->string('terminos');
        $table->string('terminosCompra');
        $table->string('terminosCusro');
        $table->bigInteger('asesorId')->unsigned();

        $table->foreign('asesorId')->references('id')->on('users');

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
        Schema::dropIfExists('clients');
    }
}
