<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComplainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complains', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('subject');
            $table->longText('details');
            $table->string('name');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->string('image');
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('complains');
    }
}
