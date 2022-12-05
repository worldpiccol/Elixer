<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIvProfitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iv_profits', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("user_id")->index();
            $table->bigInteger("investment_id");
            $table->double("amount");
            $table->double("invested");
            $table->string("currency");
            $table->double("rate");
            $table->bigInteger("payout")->nullable();
            $table->dateTime('calc_at');
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
        Schema::dropIfExists('iv_profits');
    }
}
