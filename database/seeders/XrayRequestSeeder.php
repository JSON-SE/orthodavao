<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class XrayRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('xray_requests')->insert(array(
            0 =>
            array(
                'name' => 'Cervical_Open_Mouth_View'
            ),
            1 =>
            array(
                'name' => 'Cervical_AP_+_Lateral_Swimmers'
            ),
            2 =>
            array(
                'name' => 'Cervical_Right_&_Left_Obliques'
            ),
            3 =>
            array(
                'name' => 'Thoracic_APL'
            ),
            4 =>
            array(
                'name' => 'Chest_PAL(pedia)'
            ),
            5 =>
            array(
                'name' => 'Chest_ALV'
            ),
            6 =>
            array(
                'name' => 'Chest_AP'
            ),
            7 =>
            array(
                'name' => 'TBC'
            ),
            8 =>
            array(
                'name' => 'Shoulder_AP_Left'
            ),
            9 =>
            array(
                'name' => 'Shoulder_AP_Right'
            ),
            10 =>
            array(
                'name' => 'Neutral_AP_Stress_View_Left'
            ),
            11 =>
            array(
                'name' => 'Neutral_AP_Stress_View_Right'
            ),
            12 =>
            array(
                'name' => 'Shoulder_Axial_View_Left'
            ),
            13 =>
            array(
                'name' => 'Shoulder_Axial_View_Right'
            ),
            14 =>
            array(
                'name' => 'Shoulder_OIR(Grashey)_View_Left'
            ),
            15 =>
            array(
                'name' => 'Shoulder_OIR(Grashey)_View_Right'
            ),
            16 =>
            array(
                'name' => 'Shoulder_Lateral(Neers)_View_Left'
            ),
            17 =>
            array(
                'name' => 'Shoulder_Lateral(Neers)_View_Right'
            ),
            18 =>
            array(
                'name' => 'Shoulder_Neutral_Left'
            ),
            19 =>
            array(
                'name' => 'Shoulder_Neutral_Right'
            ),
            20 =>
            array(
                'name' => 'Shoulder_IR_Left'
            ),
            21 =>
            array(
                'name' => 'Shoulder_IR_Right'
            ),
            22 =>
            array(
                'name' => 'Shoulder_Glenohumeral_Left'
            ),
            23 =>
            array(
                'name' => 'Shoulder_Glenohumeral_Right'
            ),
            24 =>
            array(
                'name' => 'Clavicle_Left'
            ),
            25 =>
            array(
                'name' => 'Clavicle_Right'
            ),
            26 =>
            array(
                'name' => 'Clavicle_AP_Cephalad_Angulation(Serendipity_View)_Left'
            ),
            27 =>
            array(
                'name' => 'Clavicle_AP_Cephalad_Angulation(Serendipity_View)_Right'
            ),
            28 =>
            array(
                'name' => 'Axillary_View_Left'
            ),
            29 =>
            array(
                'name' => 'Axillary_View_Right'
            ),
            30 =>
            array(
                'name' => 'Y-Scapular_View_Left'
            ),
            31 =>
            array(
                'name' => 'Y-Scapular_View_Right'
            ),
            32 =>
            array(
                'name' => 'Femur_APL_Left'
            ),
            33 =>
            array(
                'name' => 'Femur_APL_Right'
            ),
            34 =>
            array(
                'name' => 'Knee_APL_Left'
            ),
            35 =>
            array(
                'name' => 'Knee_APL_Right'
            ),
            36 =>
            array(
                'name' => 'Knee_Merchant_View_AP_Left'
            ),
            37 =>
            array(
                'name' => 'Knee_Merchant_View_AP_Right'
            ),
            38 =>
            array(
                'name' => 'Knee_Sunrise_View_Left'
            ),
            39 =>
            array(
                'name' => 'Knee_Sunrise_View_Right'
            ),
            40 =>
            array(
                'name' => 'Knee_Rosenburg_View_Left'
            ),
            41 =>
            array(
                'name' => 'Knee_Rosenburg_View_Right'
            ),
            42 =>
            array(
                'name' => 'Knee_Tunnel_View_Left'
            ),
            43 =>
            array(
                'name' => 'Knee_Tunnel_View_Right'
            ),
            44 => array(
                'name' => 'Tibial_Plateau_View_Left'
            ),
            45 => array(
                'name' => 'Tibial_Plateau_View_Right'
            ),
            46 => array(
                'name' => 'Leg_APL_Left'
            ),
            47 => array(
                'name' => 'Leg_APL_Right'
            ),
            48 => array(
                'name' => 'Ankle_APL_Left'
            ),
            49 => array(
                'name' => 'Ankle_APL_Right'
            ),
            50 => array(
                'name' => 'Ankle_Mortise_APL'
            ),
            51 => array(
                'name' => 'Humerus_APL_Left'
            ),
            52 => array(
                'name' => 'Humerus_APL_Right'
            ),
            53 => array(
                'name' => 'Elbow_APL_Left'
            ),
            54 => array(
                'name' => 'Elbow_APL_Right'
            ),
            55 => array(
                'name' => 'Forearm_APL_Left'
            ),
            56 => array(
                'name' => 'Forearm_APL_Right'
            ),
            57 => array(
                'name' => 'Wrist_APL_Left'
            ),
            58 => array(
                'name' => 'Wrist_APL_Right'
            ),
            59 => array(
                'name' => 'Carpal_Tunnel_View_Left'
            ),
            60 => array(
                'name' => 'Carpal_Tunnel_View_Right'
            ),
            61 => array(
                'name' => 'Clenched_Fist_View_Left'
            ),
            62 => array(
                'name' => 'Clenched_Fist_View_Right'
            ),
            63 => array(
                'name' => 'Ulnar_Deviation_View_Left'
            ),
            64 => array(
                'name' => 'Ulnar_Deviation_View_Right'
            ),
            65 => array(
                'name' => 'Oblique_Scaphoid_View_Left'
            ),
            66 => array(
                'name' => 'Oblique_Scaphoid_View_Right'
            ),
            67 => array(
                'name' => 'Hand_APO_Left'
            ),
            68 => array(
                'name' => 'Hand_APO_Right'
            ),
            69 => array(
                'name' => 'Hand_Pronated_Oblique_View_Left'
            ),
            70 => array(
                'name' => 'Hand_Pronated_Oblique_View_Right'
            ),
            71 => array(
                'name' => 'Hand_Supinated_Oblique_View_Left'
            ),
            72 => array(
                'name' => 'Hand_Supinated_Oblique_View_Right'
            ),
            73 => array(
                'name' => 'FingerLeft'
            ),
            74 => array(
                'name' => 'FingerRight'
            ),
            75 => array(
                'name' => 'Lumbar_APL'
            ),
            76 => array(
                'name' => 'Lumbar_Forward_&_Backward_bending'
            ),
            77 => array(
                'name' => 'Lumbar_Ferguson_View'
            ),
            78 => array(
                'name' => 'Lumbar_Oblique_View_Left'
            ),
            79 => array(
                'name' => 'Lumbar_Oblique_View_Right'
            ),
            80 => array(
                'name' => 'Scoliosis_Series'
            ),
            81 => array(
                'name' => 'Pelvis_AP'
            ),
            82 => array(
                'name' => 'Pelvis_Inlet+Outlet_Views'
            ),
            83 => array(
                'name' => 'Pelvis_Internal_Oblique+External_Oblique_Views'
            ),
            84 => array(
                'name' => 'Abdomen_Upright_&_Supine_Views'
            ),
            85 => array(
                'name' => 'Hip_APL_Left'
            ),
            86 => array(
                'name' => 'Hip_APL_Right'
            ),
            87 => array(
                'name' => 'Ankle_Mortise_View_Left'
            ),
            88 => array(
                'name' => 'Ankle_Mortise_View_Right'
            ),
            89 => array(
                'name' => 'Foot_APL_Left'
            ),
            90 => array(
                'name' => 'Foot_APL_Right'
            ),
            91 => array(
                'name' => 'Foot_Oblique_Left'
            ),
            92 => array(
                'name' => 'Foot_Oblique_Right'
            ),
            93 => array(
                'name' => 'Foot_APO_Left'
            ),
            94 => array(
                'name' => 'Foot_APO_Right'
            ),
            95 => array(
                'name' => 'Talar_Neck_View_Left'
            ),
            96 => array(
                'name' => 'Talar_Neck_View_Right'
            ),
            97 => array(
                'name' => 'Talar_Tilt_Stress_View_Left'
            ),
            98 => array(
                'name' => 'Talar_Tilt_Stress_View_Right'
            ),
            99 => array(
                'name' => 'Harris_View_Left'
            ),
            100 => array(
                'name' => 'Harris_View_Right'
            ),
            101 => array(
                'name' => 'Brodens_View'
            ),
            102 => array(
                'name' => 'Foot_Lateral_Left'
            ),
            103 => array(
                'name' => 'Foot_Lateral_Right'
            ),
            104 => array(
                'name' => 'Harris_View_Left'
            ),
            105 => array(
                'name' => 'Harris_View_Right'
            ),
            106 => array(
                'name' => 'Skeletal_Survey'
            ),
        ));
    }
}
