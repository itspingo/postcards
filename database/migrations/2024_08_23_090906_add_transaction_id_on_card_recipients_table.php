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
            $table->unsignedBigInteger('transaction_id')->default(null)->nullable();

            $table->foreign('transaction_id')->references('id')->on('transactions');

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
            $table->dropColumn('transaction_id');
        });
    }
};
