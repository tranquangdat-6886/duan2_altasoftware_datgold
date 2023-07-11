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
        Schema::create('detail_contacts', function (Blueprint $table) {
            $table->id("ID_CONTAC");
            $table->unsignedBigInteger('ID_CU')->nullable();
            $table->string("content");
            $table->foreign("ID_CU")->references("ID_CU")->on("customers")->onDelete("SET NULL");
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
        Schema::dropIfExists('detail_contacts');
    }
};