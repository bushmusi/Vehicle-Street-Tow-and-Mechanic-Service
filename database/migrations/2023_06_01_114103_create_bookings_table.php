<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->text('problem_description');
            $table->enum('issue_type', ['tow', 'mechanic']);
            $table->unsignedBigInteger('address_id')->nullable();
            $table->boolean('status')->default(false);
            $table->unsignedBigInteger('fixer_id')->nullable();
            $table->timestamps();
            
            // Define foreign key constraints
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('fixer_id')->references('id')->on('users');
            $table->foreign('address_id')->references('id')->on('addresses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
