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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id("ID_TICKET");
            $table->unsignedBigInteger("ID_EVEN")->nullable();
            $table->unsignedBigInteger("ID_PACK")->nullable();
            $table->string('name');
            $table->decimal("price");
            $table->dateTime("saleDate");
            $table->integer("status");
            $table->foreign('ID_EVEN')->references('ID_EVEN')->on('events')->onDelete('SET NULL');
            $table->foreign('ID_PACK')->references('ID_PACK')->on('packages')->onDelete('SET NULL');
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
        Schema::dropIfExists('tickets');
    }
};