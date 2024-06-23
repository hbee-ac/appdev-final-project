<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ToDoListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('todolist')->insert([
            ['todo' => 'Wash the dishes.', 'user_id' => 1],
            ['todo' => 'Do the laundry.', 'user_id' => 2],
            ['todo' => 'Take a short walk.', 'user_id' => 3],
            ['todo' => 'Buy groceries.', 'user_id' => 4],
            ['todo' => 'Eat with friends.', 'user_id' => 5],
        ]);
    }
}
