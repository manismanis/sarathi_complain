<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('comments')->nullable();
            $table->longText('replies')->nullable();
            $table->string('deadline');
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('admins')->onDelete('restrict');
            $table->unsignedBigInteger('complain_id')->unsigned();
            $table->foreign('complain_id')->references('id')->on('complains')->onDelete('restrict');
            $table->enum('status', ['OnProcess', 'Completed'])->default('OnProcess');
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
        Schema::dropIfExists('comments');
    }
}
