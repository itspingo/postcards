<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_text_formats', function (Blueprint $table) {
            $table->id();
            $table->string('client_id')->nullable();
            $table->string('user_id')->nullable();
            $table->string('web_user_id')->nullable();
            $table->text('text_format');

            // $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('user_text_formats');

    }
};
