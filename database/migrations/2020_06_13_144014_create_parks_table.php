<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parks', function (Blueprint $table) {
            $table->id();                  // id
            $table->string('name'); // 公園名
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *a
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parks');
    }
}
