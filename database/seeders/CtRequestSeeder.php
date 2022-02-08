<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CtRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('ct_requests')->insert(array(
            1 => array('name' => 'Cranial'),
            2 => array('name' => 'Cervical'),
            3 => array('name' => 'Thoracic'),
            4 => array('name' => 'Chest'),
            5 => array('name' => 'Shoulder_Left'),
            6 => array('name' => 'Shoulder_Right'),
            7 => array('name' => 'Arm_Left'),
            8 => array('name' => 'Arm_Right'),
            9 => array('name' => 'Elbow_Left'),
            10 => array('name' => 'Elbow_Right'),
            11 => array('name' => 'Wrist_Left'),
            12 => array('name' => 'Wrist_Right'),
            13 => array('name' => 'Hand_Left'),
            14 => array('name' => 'Hand_Right'),
            15 => array('name' => 'Lumbar'),
            16 => array('name' => 'Abdomen'),
            17 => array('name' => 'Pelvis'),
            18 => array('name' => 'Hip_Left'),
            19 => array('name' => 'Hip_Right'),
            20 => array('name' => 'Thigh_Left'),
            21 => array('name' => 'Thigh_Right'),
            22 => array('name' => 'Knee_Left'),
            23 => array('name' => 'Knee_Right'),
            24 => array('name' => 'Leg_Left'),
            25 => array('name' => 'Leg_Right'),
            26 => array('name' => 'Ankle_Left'),
            27 => array('name' => 'Ankle_Right'),
            28 => array('name' => 'Foot_Left'),
            29 => array('name' => 'Foot_Right'),
        ));
    }
}
