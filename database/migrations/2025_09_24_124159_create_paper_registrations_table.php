<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('paper_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('affiliation')->nullable();
            $table->string('department')->nullable();
            $table->string('institution')->nullable();
            $table->string('country');
            $table->string('phone');
            $table->string('email');
            $table->string('bms_id_no')->nullable();

            // File paths
            $table->string('authors_photograph'); // stored path
            $table->string('student_id_card')->nullable();

            $table->string('research_scope');
            $table->string('paper_id_no');
            $table->string('paper_title');
            $table->string('authors_name');
            $table->string('manuscript'); // stored path

            $table->enum('presentation_type', ['Physical', 'Virtual']);
            $table->string('presenter_full_name');

            $table->enum('payment_method', ['bank', 'bkash']);
            $table->string('tracking_number');
            $table->string('proof_of_payment'); // stored path

            // Optional admin approval for paper registration
            $table->boolean('is_approved')->default(false);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('paper_registrations');
    }
};
