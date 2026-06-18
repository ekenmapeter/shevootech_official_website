<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->renameColumn('client', 'client_name');
            $table->renameColumn('stack_used', 'stack');
            $table->boolean('featured')->default(false)->after('live_url');
        });
    }

    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->renameColumn('client_name', 'client');
            $table->renameColumn('stack', 'stack_used');
            $table->dropColumn('featured');
        });
    }
};
