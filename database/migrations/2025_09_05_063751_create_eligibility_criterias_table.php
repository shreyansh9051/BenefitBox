<?php

use App\Enums\EligibilityCriteriaStatus;
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
        Schema::create('eligibility_criterias', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->unique();
            $table->text('description')->nullable();
            $table->unsignedTinyInteger('age_less_than')->nullable();
            $table->unsignedTinyInteger('age_greater_than')->nullable();
            $table->unsignedInteger('last_login_days_ago')->nullable();
            $table->unsignedInteger('income_less_than')->nullable();
            $table->unsignedInteger('income_greater_than')->nullable();
            $table->tinyInteger('status')->default(EligibilityCriteriaStatus::ACTIVE->value);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eligibility_criterias');
    }
};
