<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trades', function (Blueprint $table) {
            $table->id();
            $table->string('trd_id')->unique();
            $table->unsignedBigInteger('crypto_id');
            $table->unsignedBigInteger('trade_option_id');
            $table->string('pair')->nullable();
            $table->double('capital');
            $table->double('profit')->nullable();
            $table->string('trade_outcome');
            $table->double('start_price',30,8)->nullable();
            $table->double('end_price',30,8)->nullable();
            $table->string('status');
            $table->string('term');
            $table->string('term_type');
            $table->text('remark')->nullable();
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
        Schema::dropIfExists('trades');
    }
}
