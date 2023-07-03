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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('location');
            $table->string('img');
            $table->email('email')->nullable();
            $table->timestamps();
        });


        //    DB::table('task_groups')->insert([
        //     ['name' => 'TASKS TODAY', 'location' => 'description of the category', 'email' => 'test@email.com'],
        //     ['name' => 'TASKS TOMORROW', 'description' => 'description of the category'],
        //     ['name' => 'TASKS NEXT WEEK', 'description' => 'description of the category'],
        //     ['name' => ' TASKS NEXT WEEK', 'description' => 'description of the category'],
        //     ['name' => ' TASKS NEXT', 'description' => 'description of the category'],
        // ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
