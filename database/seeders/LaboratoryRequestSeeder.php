<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LaboratoryRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('laboratory_requests')->insert(array(
            0 => array('name' => 'CBC'),
            1 => array('name' => 'Platelet_Count'),
            2 => array('name' => 'Blood_Typing'),
            3 => array('name' => 'ESR'),
            4 => array('name' => 'CRP'),
            5 => array('name' => 'ASO'),
            6 => array('name' => 'Rheumatoid_Factor'),
            7 => array('name' => 'ANA'),
            8 => array('name' => 'T3,_T4,_TSH'),
            9 => array('name' => 'Calcium'),
            10 => array('name' => 'Potassium'),
            11 => array('name' => 'Magnessium'),
            12 => array('name' => 'Creatinine'),
            13 => array('name' => 'Fasting_Blood_Sugar'),
            14 => array('name' => 'Serum_Uric_Acid'),
            15 => array('name' => 'Alkaline_Phosphatase'),
            16 => array('name' => 'LDH'),
            17 => array('name' => 'SGPT/SGOT'),
            18 => array('name' => 'Lipid_Profile'),
            19 => array('name' => 'AFP'),
            20 => array('name' => 'PSA'),
            21 => array('name' => 'CEA'),
            22 => array('name' => 'HCG'),
            23 => array('name' => 'RTPCR'),
            24 => array('name' => 'RAT'),
        ));
    }
}
