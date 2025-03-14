<?php

use App\Models\Admin;
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
        $table = (new Admin())->getTable();

        Schema::create($table, function (Blueprint $table) {
            $table->id();
            $table->string("email")->unique();
            $table->string("password");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $table = (new Admin())->getTable();
        Schema::dropIfExists($table);
    }
};
