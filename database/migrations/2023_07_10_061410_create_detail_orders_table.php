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
        Schema::create('detail_orders', function (Blueprint $table) {
            $table->id("ID_DETAIL");
            $table->unsignedBigInteger("ID_ORDER")->nullable();
            $table->decimal("price", 10, 2)->default(0);
            $table->foreign("ID_ORDER")->references("ID_ORDER")->on("orders")->onDelete("SET NULL");          
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
        Schema::dropIfExists('detail_orders');
    }
};