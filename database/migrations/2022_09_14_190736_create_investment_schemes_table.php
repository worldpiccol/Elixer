<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestmentSchemesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investment_schemes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('crypto_id');
            $table->string('name');
            $table->string("slug")->unique();
            $table->string('description')->nullable();
            $table->double('min_amount');
            $table->double('max_amount');
            $table->string('terms');
            $table->string("term_type");
            $table->float("rate");
            $table->string("rate_type");
            $table->string('calc_period');
            $table->boolean("days_only")->default(false);
            $table->boolean("capital")->default(false);
            $table->string("payout");
            $table->string('status')->default('active');
            $table->boolean('is_locked')->default(false);
            $table->boolean("featured")->default(false);
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
        Schema::dropIfExists('investment_schemes');
    }
}
