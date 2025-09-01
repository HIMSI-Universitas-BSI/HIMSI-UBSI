<?php

use App\Traits\BaseModelSoftDeleteDefault;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    use BaseModelSoftDeleteDefault;
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('branch_detail', function (Blueprint $table) {
            $table->id();
            $table->foreignId('branch_id')->constrained('branch');
            $table->json('ketua');
            $table->json('wakil_ketua');
            $table->json('sekertaris_1');
            $table->json('sekertaris_2');
            $table->json('bendahara_1');
            $table->json('bendahara_2');
            $table->json('koor_pendidikan');
            $table->json('koor_kominfo');
            $table->json('koor_rsdm');
            $table->json('koor_litbang');
            $this->base($table);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('branch_detail');
    }
};
