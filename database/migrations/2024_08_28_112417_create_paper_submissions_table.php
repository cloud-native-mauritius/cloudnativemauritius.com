<?php

use App\Enums\PaperSubmissionStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('paper_submissions', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('abstract');
            $table->string('status')->default(PaperSubmissionStatus::SUBMITTED->value);
            $table->text('submitter_name');
            $table->string('submitter_email');
            $table->text('submitter_bio');
            $table->string('submitter_photo');
            $table->string('submitter_company')
                ->nullable();
            $table->string('submitter_job_title')
                ->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paper_submissions');
    }
};
