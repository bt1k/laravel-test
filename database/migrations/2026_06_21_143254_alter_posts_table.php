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
        Schema::table('posts', function (Blueprint $table) {
            // Add timezone to `created_at` to disambiguate between times on
            // days when the clock goes back (if the clocks go back an hour at
            // 2am on a particular day, then 1:30am refers to two different
            // times, and thus a timezone is needed for disambiguation). Also
            // drop unnecessary `updated_at`. Make `created_at` nullable to be
            // consistent with Laravel's `timestamps` method, which creates
            // nullable columns.
            $table->timestampTz('created_at')->nullable()->change();
            $table->dropColumn('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            // As above, make columns nullable to be consistent with Laravel's
            // `timestamps` method.
            $table->timestamp('created_at')->nullable()->change();
            $table->timestamp('updated_at')->nullable();
        });
    }
};
