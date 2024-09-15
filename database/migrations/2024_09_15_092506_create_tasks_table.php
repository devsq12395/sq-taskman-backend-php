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
        Schema::create('tasks', function (Blueprint $table) {
			$table->id('task_id'); // Equivalent to 'task_id'
			$table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Foreign key to 'users' table
			$table->string('title');
			$table->text('description')->nullable(); // Can be null
			$table->timestamps(); // Adds created_at and updated_at
		});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
