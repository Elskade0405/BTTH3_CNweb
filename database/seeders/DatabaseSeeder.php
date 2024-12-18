<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        User::table('medicines')->insert([
        ['name' => 'Paracetamol', 'brand' => 'Haco', 'dosage' => '500mg','form'=>'vien nen','price'=>'10000','stock'=>'50',]
        ]);
        Student::create([
            'first_name' => 'Nguyen Van',
            'last_name' => 'A',
            'date_of_birth' => '2018-05-10',
            'parent_phone' => '0901234567',
            'class_id' => 1, // Liên kết với lớp có id = 1
        ]);

         Student::create([
            'first_name' => 'Tran Thi',
            'last_name' => 'B',
            'date_of_birth' => '2017-02-15',
            'parent_phone' => '0987654321',
            'class_id' => 2, // Liên kết với lớp có id = 2
        ]);
        Computer::create([
            'computer_name' => 'Lab1-PC01',
            'model' => 'Dell Optiplex 7090',
            'operating_system' => 'Windows 10 Pro',
            'processor' => 'Intel Core i5-11400',
            'memory' => 8,
        ]);

                Computer::create([
            'computer_name' => 'Lab2-PC05',
            'model' => 'HP ProDesk 400 G6',
            'operating_system' => 'Windows 11 Pro',
            'processor' => 'Intel Core i7-12700',
            'memory' => 16,
        ]);
        Issue::create([
            'computer_id' => 1,
            'reported_by' => 'Nguyen Van A',
            'reported_date' => now(), // Thời gian hiện tại
            'description' => 'Máy tính bị treo khi mở nhiều tab Chrome.',
            'urgency' => 'Medium',
            'status' => 'In Progress',
        ]);

        Issue::create([
            'computer_id' => 2,
            'reported_date' => now(),
            'description' => 'Màn hình bị nhấp nháy.',
            'urgency' => 'High',
        ]);
        
    }
}
