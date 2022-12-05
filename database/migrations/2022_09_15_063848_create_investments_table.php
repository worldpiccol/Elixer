<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investments', function (Blueprint $table) {
            $table->id();
            $table->string('ivx');
            $table->unsignedBigInteger("user_id");
            $table->double("amount");
            $table->double("profit");
            $table->double("total");
            $table->double("received");
            $table->double("received_profits");
            $table->string("currency");
            $table->string("rate");
            $table->string("term");
            $table->integer("term_count");
            $table->integer("term_total");
            $table->string("term_calc");
            $table->dateTime("term_start")->nullable();
            $table->dateTime("term_end")->nullable();
            $table->bigInteger("reference");
            $table->unsignedBigInteger('investment_scheme_id')->nullable();
            $table->text('desc')->nullable();
            $table->text('remarks')->nullable();
            $table->text('note')->nullable();
            $table->string("status");
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
        Schema::dropIfExists('investments');
    }
}
