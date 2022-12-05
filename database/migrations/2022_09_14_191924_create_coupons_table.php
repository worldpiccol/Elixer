<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->string('name')->Unique();
            $table->longText('description')->nullable();
            $table->double('amount',30,8);
            $table->string('reward_type');
            $table->string('reward_currency');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('code')->unique()->nullable();
            $table->string('credit_reward_to');
            $table->unsignedBigInteger('crypto_id')->nullable();
            $table->boolean('is_claimed')->default(false);
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
        Schema::dropIfExists('coupons_');
    }
}
