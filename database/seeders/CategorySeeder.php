<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                "category_id" => 1,
                "title" => "indoor",
                
            ],
            [
                "category_id" => 2,
                "title" => "outdoor",
                
            ]
        ];
        
        DB::table('categories')->insert($users);
    }
}
