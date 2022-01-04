<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PhilippineRegionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('philippine_regions')->delete();
        
        \DB::table('philippine_regions')->insert(array (
            0 => 
            array (
                'created_at' => '2021-12-15 19:04:59',
                'id' => 1,
                'psgc_code' => '010000000',
                'region_code' => '01',
            'region_description' => 'REGION I (ILOCOS REGION)',
                'updated_at' => '2021-12-15 19:04:59',
            ),
            1 => 
            array (
                'created_at' => '2021-12-15 19:04:59',
                'id' => 2,
                'psgc_code' => '020000000',
                'region_code' => '02',
            'region_description' => 'REGION II (CAGAYAN VALLEY)',
                'updated_at' => '2021-12-15 19:04:59',
            ),
            2 => 
            array (
                'created_at' => '2021-12-15 19:04:59',
                'id' => 3,
                'psgc_code' => '030000000',
                'region_code' => '03',
            'region_description' => 'REGION III (CENTRAL LUZON)',
                'updated_at' => '2021-12-15 19:04:59',
            ),
            3 => 
            array (
                'created_at' => '2021-12-15 19:04:59',
                'id' => 4,
                'psgc_code' => '040000000',
                'region_code' => '04',
            'region_description' => 'REGION IV-A (CALABARZON)',
                'updated_at' => '2021-12-15 19:04:59',
            ),
            4 => 
            array (
                'created_at' => '2021-12-15 19:04:59',
                'id' => 5,
                'psgc_code' => '170000000',
                'region_code' => '17',
            'region_description' => 'REGION IV-B (MIMAROPA)',
                'updated_at' => '2021-12-15 19:04:59',
            ),
            5 => 
            array (
                'created_at' => '2021-12-15 19:04:59',
                'id' => 6,
                'psgc_code' => '050000000',
                'region_code' => '05',
            'region_description' => 'REGION V (BICOL REGION)',
                'updated_at' => '2021-12-15 19:04:59',
            ),
            6 => 
            array (
                'created_at' => '2021-12-15 19:04:59',
                'id' => 7,
                'psgc_code' => '060000000',
                'region_code' => '06',
            'region_description' => 'REGION VI (WESTERN VISAYAS)',
                'updated_at' => '2021-12-15 19:04:59',
            ),
            7 => 
            array (
                'created_at' => '2021-12-15 19:04:59',
                'id' => 8,
                'psgc_code' => '070000000',
                'region_code' => '07',
            'region_description' => 'REGION VII (CENTRAL VISAYAS)',
                'updated_at' => '2021-12-15 19:04:59',
            ),
            8 => 
            array (
                'created_at' => '2021-12-15 19:04:59',
                'id' => 9,
                'psgc_code' => '080000000',
                'region_code' => '08',
            'region_description' => 'REGION VIII (EASTERN VISAYAS)',
                'updated_at' => '2021-12-15 19:04:59',
            ),
            9 => 
            array (
                'created_at' => '2021-12-15 19:04:59',
                'id' => 10,
                'psgc_code' => '090000000',
                'region_code' => '09',
            'region_description' => 'REGION IX (ZAMBOANGA PENINSULA)',
                'updated_at' => '2021-12-15 19:04:59',
            ),
            10 => 
            array (
                'created_at' => '2021-12-15 19:04:59',
                'id' => 11,
                'psgc_code' => '100000000',
                'region_code' => '10',
            'region_description' => 'REGION X (NORTHERN MINDANAO)',
                'updated_at' => '2021-12-15 19:04:59',
            ),
            11 => 
            array (
                'created_at' => '2021-12-15 19:04:59',
                'id' => 12,
                'psgc_code' => '110000000',
                'region_code' => '11',
            'region_description' => 'REGION XI (DAVAO REGION)',
                'updated_at' => '2021-12-15 19:04:59',
            ),
            12 => 
            array (
                'created_at' => '2021-12-15 19:04:59',
                'id' => 13,
                'psgc_code' => '120000000',
                'region_code' => '12',
            'region_description' => 'REGION XII (SOCCSKSARGEN)',
                'updated_at' => '2021-12-15 19:04:59',
            ),
            13 => 
            array (
                'created_at' => '2021-12-15 19:04:59',
                'id' => 14,
                'psgc_code' => '130000000',
                'region_code' => '13',
            'region_description' => 'NATIONAL CAPITAL REGION (NCR)',
                'updated_at' => '2021-12-15 19:04:59',
            ),
            14 => 
            array (
                'created_at' => '2021-12-15 19:04:59',
                'id' => 15,
                'psgc_code' => '140000000',
                'region_code' => '14',
            'region_description' => 'CORDILLERA ADMINISTRATIVE REGION (CAR)',
                'updated_at' => '2021-12-15 19:04:59',
            ),
            15 => 
            array (
                'created_at' => '2021-12-15 19:04:59',
                'id' => 16,
                'psgc_code' => '150000000',
                'region_code' => '15',
            'region_description' => 'BANGSAMORO AUTONOMOUS REGION IN MUSLIM MINDANAO (BARMM)',
                'updated_at' => '2021-12-15 19:04:59',
            ),
            16 => 
            array (
                'created_at' => '2021-12-15 19:04:59',
                'id' => 17,
                'psgc_code' => '160000000',
                'region_code' => '16',
            'region_description' => 'REGION XIII (Caraga)',
                'updated_at' => '2021-12-15 19:04:59',
            ),
        ));
        
        
    }
}