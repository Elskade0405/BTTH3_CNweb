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
            Schema::create('students', function (Blueprint $table) {
                $table->id();
                $table->string('first_name', 50);
                $table->string(column: 'last_name',length:50);
                $table->dateTime('date_of_birth');
                $table->string(column:'parent_phone',length:20);
                $table->foreignId('class_id')->constrained('classes');
            });
            Schema::create('classes', function (Blueprint $table) {
                $table->id();
                $table->enum('grade_level', ['Pre-K', 'Kindergarten']);
                $table->string(column:'room_number',length:10);
            });

    }

    }
?>