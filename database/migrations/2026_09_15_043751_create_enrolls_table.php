
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('enrolls', function (Blueprint $table) {
            $table->id();

            // Identify the submitted form
            $table->string('form_type', 30);

            // Personal Information
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone', 30);

            // Enrollment Information
            $table->string('industry')->nullable();
            $table->string('qualification');
            $table->string('preferred_pathway')->nullable();

            // Nullable: NULL means this form did not ask for consent
            $table->boolean('terms_accepted')->nullable();

            $table->timestamps();

            $table->index(['form_type', 'created_at']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('enrolls');
    }
};
