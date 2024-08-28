<?php

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
        Schema::create('c_f_p_submissions', function (Blueprint $table) {
            $table->id();
            // Used for speaker profile on Bevy
            $table->string('name');
            $table->string('company')->nullable();
            $table->string('jobtitle')->nullable();
            $table->text('bio');

            $table->string('email');

            // Presentation details
            $table->string('title');
            $table->string('extract');
            $table->boolean('confirmed')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('c_f_p_submissions');
    }
};
