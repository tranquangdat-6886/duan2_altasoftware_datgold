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
        Schema::create('payments', function (Blueprint $table) {
            $table->id("ID_PAY");
            $table->decimal("vnp_Amount", 10, 2)->default(0);
            $table->string('vnp_BankCode')->nullable();
            $table->string('vnp_BankTranNo')->nullable();
            $table->string('vnp_CardType')->nullable();
            $table->string('vnp_OrderInfo')->nullable();
            $table->string('vnp_PayDate')->nullable();
            $table->string('vnp_ResponseCode')->nullable();
            $table->string('vnp_TmnCode')->nullable();
            $table->string('vnp_TransactionNo')->nullable();
            $table->string('vnp_TransactionStatus')->nullable();
            $table->string('vnp_TxnRef')->nullable();
            $table->string('vnp_SecureHash')->nullable();
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
        Schema::dropIfExists('payments');
    }
};
