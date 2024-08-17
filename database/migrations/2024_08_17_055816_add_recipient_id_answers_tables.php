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
        Schema::table('answers_optional_question', function (Blueprint $table) {
            $table->unsignedBigInteger('recipient_id')->nullable();
        });

        Schema::table('answers_text_question', function (Blueprint $table) {
            $table->unsignedBigInteger('recipient_id')->nullable();
        });
        Schema::table('answers_attend_quest', function (Blueprint $table) {
            $table->unsignedBigInteger('recipient_id')->nullable();
        });
        Schema::table('answers_memorial', function (Blueprint $table) {
            $table->unsignedBigInteger('recipient_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('answers_optional_question', function (Blueprint $table) {
            $table->dropColumn('recipient_id');
        });
        Schema::table('answers_text_question', function (Blueprint $table) {
            $table->dropColumn('recipient_id');
        });
        Schema::table('answers_attend_quest', function (Blueprint $table) {
            $table->dropColumn('recipient_id');
        });
        Schema::table('answers_memorial', function (Blueprint $table) {
            $table->dropColumn('recipient_id');
        });
    }
};
