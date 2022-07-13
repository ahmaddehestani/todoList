<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
                "id" => 1,
                "title" => "indoor",
                
            ],
            [
                "id" => 2,
                "title" => "outdoor",
                
            ]
        ];
        
        DB::table('categories')->insert($users);
    }
}
