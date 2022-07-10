<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
        public function run()
    {
        $dt = Carbon::now();
        $dateNow = $dt->toDateTimeString();
        $users = [
            [
                "item_id" => 1,
                "title" => "study1",
                "description" => "study php2",
                "createTime"=>$dateNow,
                "status" => "pending",
                "statusTime"=>$dateNow,
                "category"=>1
            ],
            [
                "item_id" => 2,
                "title" => "study2",
                "description" => "study php2",
                "createTime"=>$dateNow,
                "status" => "pending",
                "statusTime"=>$dateNow,
                "category"=>1
            ],
            [
                "item_id" => 3,
                "title" => "play1",
                "description" => "football",
                "createTime"=>$dateNow,
                "status" => "pending",
                "statusTime"=>$dateNow,
                "category"=>2
            ],
            [
                "item_id" => 4,
                "title" => "play2",
                "description" => "volleyball",
                "createTime"=>$dateNow,
                "status" => "pending",
                "statusTime"=>$dateNow,
                "category"=>2
            ]
        ];
     
        DB::table('items')->insert($users);
}
    }