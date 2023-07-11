<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id("ID_EVEN");
            $table->string("name");
            $table->string("title");
            $table->string("avatar")->nullable();
            $table->string('images')->nullable();
            $table->string('description')->nullable();
            $table->date('startDate');
            $table->date('endDate');
            $table->integer('status');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
};