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
            Schema::create('medicines', function (Blueprint $table) {
                $table->id();
                $table->string('name', 255);
                $table->string('brand', 100)->nullable();
                $table->string(column:'dosage',length:50);
                $table->string(column:'form',length:50);
                $table->decimal('price',18,2)->nullable();
                $table->integer(column:'stock')->nullable();
            });
            Schema::create('sales', function (Blueprint $table) {
                $table->id();
                $table->foreignId('medicine_id')->constrained('medicines');
                $table->integer(column:'quantity');
                $table->dateTime(column:'sale_date');
                $table->string(column:'customer_phone',length:10);
            });

    }

    }
?>