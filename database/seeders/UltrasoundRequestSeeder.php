<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UltrasoundRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('ultrasound_requests')->insert(array(
           0 => array('name' => 'Neck'),
           1 => array('name' => 'Shoulder_Left'),
           2 => array('name' => 'Shoulder_Right'),
           3 => array('name' => 'Arm_Left'),
           4 => array('name' => 'Arm_Right'),
           5 => array('name' => 'Elbow_Left'),
           6 => array('name' => 'Elbow_Right'),
           7 => array('name' => 'Wrist_Left'),
           8 => array('name' => 'Wrist_Right'),
           9 => array('name' => 'Hand_Left'),
           10 => array('name' => 'Hand_Right'),
           11 => array('name' => 'Upper_Back'),
           12 => array('name' => 'lower_Back'),
           13 => array('name' => 'Abdomen'),
           14 => array('name' => 'Pelvis'),
           15 => array('name' => 'Hip_Left'),
           16 => array('name' => 'Hip_Right'),
           17 => array('name' => 'Thigh_Left'),
           18 => array('name' => 'Thigh_Right'),
           19 => array('name' => 'Knee_Left'),
           20 => array('name' => 'Knee_Right'),
           21 => array('name' => 'Leg_Left'),
           22 => array('name' => 'Leg_Right'),
           23 => array('name' => 'Ankle_Left'),
           24 => array('name' => 'Ankle_Right'),
           25 => array('name' => 'Foot_Left'),
           26 => array('name' => 'Foot_Right'),
           27 => array('name' => 'DOPPLER_Upper_Extremity_Left'),
           28 => array('name' => 'DOPPLER_Upper_Extremity_Right'),
           29 => array('name' => 'DOPPLER_Lower_Extremity_Left'),
           30 => array('name' => 'DOPPLER_Lower_Extremity_Right'),
           31 => array('name' => '2-D_Echocardiogram'),
        ));
    }
}
