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
        Schema::table('card_recipients', function (Blueprint $table) {
            $table->tinyInteger('card_status')->default(1)->nullable();//1=not viewed,2=viewed, ...
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('card_recipients', function (Blueprint $table) {
            $table->dropColumn('card_status');
        });
    }
};
