<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('full_name')->nullable();
            $table->string('post')->nullable();
            $table->string('image')->nullable();
            $table->longText('objective')->nullable();
            $table->string('father_name')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('religion')->nullable();
            $table->string('domicile')->nullable();
            $table->string('gender')->nullable();
            $table->string('phone')->nullable();
            $table->string('province')->nullable();
            $table->text('address')->nullable();
            $table->string('nationality')->nullable();
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
        Schema::dropIfExists('profiles');
    }
}
