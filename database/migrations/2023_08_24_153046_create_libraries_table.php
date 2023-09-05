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
        Schema::create('libraries', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('stu_id');
            // $table->foreign('stu_id')->references('id')->on('students')
            // ->onUpdate('cascade')
            // ->onDelete('cascade')
            // ->onDelete('setnull');
            $table->foreignId('stu_id')->constrained('students')->cascadeOnDelete()->cascadeOnUpdate();
            // $table->string('stu_id',30);
            $table->string('book',30)->unique();

            $table->date('date_issue')->nullable();
            $table->boolean('status');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libraries');
    }
};
