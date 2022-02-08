<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MriRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('mri_requests')->insert(array(
           0 => array('name' => 'Cranial'),
           1 => array('name' => 'Cervical'),
           2 => array('name' => 'Thoracic'),
           3 => array('name' => 'Chest'),
           4 => array('name' => 'Shoulder_Left'),
           5 => array('name' => 'Shoulder_Right'),
           6 => array('name' => 'Arm_Left'),
           7 => array('name' => 'Arm_Right'),
           8 => array('name' => 'Elbow_Left'),
           9 => array('name' => 'Elbow_Right'),
           10 => array('name' => 'Wrist_Left'),
           11 => array('name' => 'Wrist_Right'),
           12 => array('name' => 'Hand_Left'),
           13 => array('name' => 'Hand_Right'),
           14 => array('name' => 'Lumbar'),
           15 => array('name' => 'Abdomen'),
           16 => array('name' => 'Pelvis'),
           17 => array('name' => 'Hip_Left'),
           18 => array('name' => 'Hip_Right'),
           19 => array('name' => 'Thigh_Left'),
           20 => array('name' => 'Thigh_Right'),
           21 => array('name' => 'Knee_Left'),
           22 => array('name' => 'Knee_Right'),
           23 => array('name' => 'Leg_Left'),
           24 => array('name' => 'Leg_Right'),
           25 => array('name' => 'Ankle_Left'),
           26 => array('name' => 'Ankle_Right'),
           27 => array('name' => 'Foot_Left'),
           28 => array('name' => 'Foot_Right'),
        ));
    }
}
