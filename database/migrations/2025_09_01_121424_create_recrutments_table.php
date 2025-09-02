<?php

use App\Traits\BaseModelSoftDeleteDefault;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PragmaRX\Google2FA\Support\Base32;

return new class extends Migration
{
    use BaseModelSoftDeleteDefault;
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('recrutment', function (Blueprint $table) {
            $table->id();
            $table->string('nim', 10);
            $table->string('name', 128);
            $table->string('semester', 16);
            $table->string('ektm', 128);
            $table->string('email', 128);
            $table->string('instagram', 128);
            $table->string('no_wa', 16);
            $table->text('description');
            $table->foreignId('branch_id')->constrained('branch');
            $table->string('follow_dpc', 128);
            $table->string('cv', 128)->nullable();
            $table->foreignId('status_id')->constrained('status')->default(1);
            $this->base($table);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recrutment');
    }
};
