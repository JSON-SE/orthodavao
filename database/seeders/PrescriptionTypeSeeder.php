<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PrescriptionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('prescription_types')->insert(array(
            0 =>
            array(
                'name' => 'Pain/Muscle Relaxant'
            ),
            1 =>
            array(
                'name' => 'Misc Supplements'
            ),
            2 =>
            array(
                'name' => 'Antimacrobial'
            ),
            3 =>
            array(
                'name' => 'Injectable'
            ),
            4 =>
            array(
                'name' => 'Dressing'
            ),
            5 =>
            array(
                'name' => 'Casting Material'
            ),
            6 =>
            array(
                'name' => 'Orthopedics Protheses'
            ),
        ));
    }
}
