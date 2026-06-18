<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('category')->default('general')->after('slug');
            $table->string('excerpt')->nullable()->after('content');
            $table->foreignId('author_id')->nullable()->constrained('users')->nullOnDelete()->after('published_at');
            $table->renameColumn('content', 'body');
            $table->renameColumn('image', 'cover_image');
        });
    }

    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn(['category', 'excerpt', 'author_id']);
            $table->renameColumn('body', 'content');
            $table->renameColumn('cover_image', 'image');
        });
    }
};
