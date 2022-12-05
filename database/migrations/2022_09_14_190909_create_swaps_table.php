<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSwapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('swaps', function (Blueprint $table) {
            $table->id();
            $table->string('swap_ref')->unique();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('from_crypto_id');
            $table->unsignedBigInteger('to_crypto_id');
            $table->double('from_amount');
            $table->double('to_amount');
            $table->double('swap_value');
            $table->integer('ex_rate')->nullable()->default(0.0);
            $table->text('description')->nullable();
            $table->text('remark')->nullabe();
            $table->string('provider')->nullabe();
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
        Schema::dropIfExists('swaps');
    }
}
