<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('tnx_id')->unique();
            $table->string('type');
            $table->unsignedBigInteger('user_id');
            $table->unsignedInteger('crypto_id')->nullable();
            $table->unsignedInteger('wallet_address_id')->nullable();
            $table->unsignedBigInteger('balance_id')->nullable();
            $table->unsignedBigInteger('account_id')->nullable();
            $table->double('amount')->default(0);
            $table->string('currency')->nullable();
            $table->string('from_currency')->nullable();
            $table->string('to_currency')->nullable();
            $table->double('total')->default(0);
            $table->double('from_amount')->default(0);
            $table->double('to_amount')->default(0);
            $table->string('status')->nullable();
            $table->bigInteger('refund')->nullable()->default(0);
            $table->string('pay_from')->nullable();
            $table->string('pay_to')->nullable();
            $table->string('reference')->nullable();
            $table->text('description')->nullable();
            $table->text('remarks')->nullable();
            $table->text('note')->nullable();
            $table->dateTime('confirmed_at')->nullable();
            $table->json('confirmed_by')->nullable();
            $table->dateTime('completed_at')->nullable();
            $table->json('completed_by')->nullable();
            $table->bigInteger('created_by');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
