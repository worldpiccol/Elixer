<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBinarySchemesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('binary_schemes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('crypto_id');
            $table->string('name')->unique();
            $table->string("slug")->unique();
            $table->string('description')->nullable();
            $table->double('min_amount');
            $table->double('max_amount');
            $table->string('terms');
            $table->string("term_type");
            $table->string('outcome');
            $table->float("rate");
            $table->string('status')->default('active');
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
        Schema::dropIfExists('binary_schemes');
    }
}
