<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;


class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $sampel = [
            ['branchNo'=>'B005','bAddress'=>'22 Deer Rd.London'],
            ['branchNo'=>'B007','bAddress'=>'16 Argyll St,Aberdeen'],
            ['branchNo'=>'B003','bAddress'=>'163 Main St, Glasgrow'],
        ];
 
        DB::table('branch')->insert($sampel);
    }
}
