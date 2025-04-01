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
        Schema::table('users', function (Blueprint $table) {
            $table->string('avatar')->nullable()->after('email');
            $table->string('google_id')->nullable()->after('avatar');
            $table->string('password')->nullable()->change();
            $table->string('remember_token')->nullable()->change();
            $table->timestamp('email_verified_at')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('avatar');
            $table->dropColumn('google_id');
            $table->string('password')->change();
            $table->string('remember_token')->change();
            $table->timestamp('email_verified_at')->change();
        });
    }
};
