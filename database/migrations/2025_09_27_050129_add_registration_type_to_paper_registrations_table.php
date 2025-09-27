<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('paper_registrations', function (Blueprint $table) {
            $table->string('registration_type')->after('payment_method'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('paper_registrations', function (Blueprint $table) {
            $table->dropColumn('registration_type');
        });
    }
};
