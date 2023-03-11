<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('partner_i_d_s', function (Blueprint $table) {
            $table->dropColumn(['lotNumber', 'procurementNumber']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('partner_i_d_s', function (Blueprint $table) {
            $table->string('lotNumber');
            $table->string('procurementNumber');
        });
    }
};
