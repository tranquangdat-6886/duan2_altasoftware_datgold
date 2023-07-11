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
        Schema::create('orders', function (Blueprint $table) {
            $table->id('ID_ORDER');
            $table->unsignedBigInteger("ID_CU")->nullable();
            $table->unsignedBigInteger("ID_TICKET")->nullable();
            $table->integer("quantity");
            $table->string("imageqr")->nullable();
            $table->foreign('ID_CU')->references("ID_CU")->on('customers')->onDelete("SET NULL");
            $table->foreign("ID_TICKET")->references("ID_TICKET")->on("tickets")->onDelete("SET NULL");
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
        Schema::dropIfExists('orders');
    }
};