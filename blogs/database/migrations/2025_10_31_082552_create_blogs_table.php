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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('cover_image')->nullable();
            // $table->text('excerpt')->nullable();
            $table->longText('content');
            $table->string('author');
            $table->foreignId('category_id')->nullable()->constrained('blog_categories')->nullOnDelete();
            // $table->json('tags')->nullable();
            // $table->enum('status', ['draft', 'published', 'archived'])->default('draft');
            $table->boolean('status')->default(true); // true = published, false = draft
            $table->timestamp('published_at')->nullable();
            $table->unsignedInteger('views')->default(0);
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
