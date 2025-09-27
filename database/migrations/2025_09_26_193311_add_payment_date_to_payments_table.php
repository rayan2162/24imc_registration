<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::table('paper_registrations', function (Blueprint $table) {
        $table->date('payment_date'); // or use dateTime() if time is needed
    });
}

public function down()
{
    Schema::table('paper_registrations', function (Blueprint $table) {
        $table->dropColumn('payment_date');
    });
}

};
