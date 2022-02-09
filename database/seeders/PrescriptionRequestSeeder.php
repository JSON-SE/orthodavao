<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PrescriptionRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('prescription_requests')->insert(array(
            1 => array(
                'name' => 'arcoxia120',
                'prescription_type_id' => 1,
                'description' => 'Arcoxia 120mg tablet #7',
                'sig' => 'Sig. 1 tablet once a day after meal'
            ),
            2 => array(
                'name' => 'arcoxia90',
                'prescription_type_id' => 1,
                'description' => 'Arcoxia 90mg tablet #10',
                'sig' => 'Sig. 1 tablet once a day after meal'
            ),
            3 => array(
                'name' => 'arcoxia60',
                'prescription_type_id' => 1,
                'description' => 'Arcoxia 60mg tablet #20',
                'sig' => 'Sig. 1 tablet 2x a day after meal'
            ),
            4 => array(
                'name' => 'celebrex400',
                'prescription_type_id' => 1,
                'description' => 'Celebrex 400 mg capsule #14',
                'sig' => 'Sig. 1 tablet once a day after meal'
            ),
            5 => array(
                'name' => 'celebrex200',
                'prescription_type_id' => 1,
                'description' => 'Celebrex 200 mg capsule #14',
                'sig' => 'Sig. 1 tablet 2x a day after meal'
            ),
            6 => array(
                'name' => 'celcoxx400',
                'prescription_type_id' => 1,
                'description' => 'Celcoxx 400 mg capsule #14',
                'sig' => 'Sig. 1 tablet once a day after meal'
            ),
            7 => array(
                'name' => 'celcoxx200',
                'prescription_type_id' => 1,
                'description' => 'Celcoxx 200 mg capsule #14',
                'sig' => 'Sig. 1 tablet 2x a day after meal'
            ),
            8 => array(
                'name' => 'oxycodone10',
                'prescription_type_id' => 1,
                'description' => 'Oxycodone 10mg tab #15',
                'sig' => 'Sig. 1 tablet once a day at night time'
            ),
            9 => array(
                'name' => 'dolcet',
                'prescription_type_id' => 1,
                'description' => 'Dolcet tab #21',
                'sig' => 'Sig. 1 tab 3x a day'
            ),
            10 => array(
                'name' => 'dolcetmini',
                'prescription_type_id' => 1,
                'description' => 'Dolcet mini  tab #21',
                'sig' => 'Sig. 1 tab 3x a day'
            ),
            11 => array(
                'name' => 'paratram',
                'prescription_type_id' => 1,
                'description' => 'Paratram tab #21',
                'sig' => 'Sig. 1 tablet 3 x a day'
            ),
            12 => array(
                'name' => 'mefenamic_acid250',
                'prescription_type_id' => 1,
                'description' => 'Mefenamic Acid 250 mg cap #21',
                'sig' => 'Sig. 1 cap 3x a day'
            ),
            13 => array(
                'name' => 'mefenamic_acid50',
                'prescription_type_id' => 1,
                'description' => 'Mefenamic Acid 50mg/5ml bot #2',
                'sig' => 'Sig. 2 tsp every 6 hrs as needed'
            ),
            14 => array(
                'name' => 'mefenamic_acid50_2',
                'prescription_type_id' => 1,
                'description' => 'Mefenamic Acid 50mg/5ml bot #2',
                'sig' => 'Sig. 1 tbsp every 6 hrs as needed'
            ),
            15 => array(
                'name' => 'paracetamol_biogesic500',
                'prescription_type_id' => 1,
                'description' => 'Paracetamol(Biogesic) 500mg tab #12',
                'sig' => 'Sig. 1 tab every 4 hrs as needed'
            ),
            16 => array(
                'name' => 'paracetamol_tempra250',
                'prescription_type_id' => 1,
                'description' => 'Paracetamol(Tempra) 250mg/5ml 60ml bot#2',
                'sig' => 'Sig. 1 tbsp every 4 hrs as needed.'
            ),
            17 => array(
                'name' => 'paracetamol_tempra125',
                'prescription_type_id' => 1,
                'description' => 'Paracetamol(Tempra) 125mg/5ml 60ml bot#2',
                'sig' => 'Sig. 1 tsp every 4 hrs as needed.'
            ),
            18 => array(
                'name' => 'lyrica75',
                'prescription_type_id' => 1,
                'description' => 'Lyrica 75mg cap #21',
                'sig' => 'Sig. 1 cap 2x a day'
            ),
            19 => array(
                'name' => 'lyrica50',
                'prescription_type_id' => 1,
                'description' => 'Lyrica 50mg cap #21',
                'sig' => 'Sig. 1 cap 2x a day'
            ),
            20 => array(
                'name' => 'gabix300',
                'prescription_type_id' => 1,
                'description' => 'Gabix 300mg cap #21',
                'sig' => 'Sig. 1 cap 3x a day'
            ),
            21 => array(
                'name' => 'gabix100',
                'prescription_type_id' => 1,
                'description' => 'Gabix 100mg cap #21',
                'sig' => 'Sig. 1 capsule 3x a day'
            ),
            22 => array(
                'name' => 'norgesic_forte',
                'prescription_type_id' => 1,
                'description' => 'Norgesic Forte tab #21',
                'sig' => 'Sig. I tab 3x a day'
            ),
            23 => array(
                'name' => 'myonal',
                'prescription_type_id' => 1,
                'description' => 'Myonal tab #21',
                'sig' => 'Sig. 1 tab 3x a day'
            ),
            24 => array(
                'name' => 'baclofen10',
                'prescription_type_id' => 1,
                'description' => 'Baclofen 10mg tab #21',
                'sig' => 'Sig. 1 tablet 3x a day'
            ),
            25 => array(
                'name' => 'dexamethasone_decilone_Forte4',
                'prescription_type_id' => 1,
                'description' => 'Dexamethasone(Decilone Forte) 4mg tab #4',
                'sig' => 'Sig. 1 tablet once a day after meal'
            ),
            26 => array(
                'name' => 'prednisolone10',
                'prescription_type_id' => 1,
                'description' => 'Prednisolone(Pred 10) 10mg tab #4',
                'sig' => 'Sig. 1 tablet once a day'
            ),
            27 => array(
                'name' => 'mecobalamine500',
                'prescription_type_id' => 2,
                'description' => 'Mecobalamine 500mcg tab # 30',
                'sig' => 'Sig. 1 tab 3x a day'
            ),
            28 => array(
                'name' => 'deiprospan',
                'prescription_type_id' => 2,
                'description' => 'Diprospan amp #1',
                'sig' => 'Sig. AD'
            ),
            29 => array(
                'name' => 'fosavance6500',
                'prescription_type_id' => 2,
                'description' => 'Fosavance 6500IU tab #8',
                'sig' => 'Sig. 1 tab 1x a week in a.m before any intake'
            ),
            30 => array(
                'name' => 'reventa',
                'prescription_type_id' => 2,
                'description' => 'Reventa tab #8',
                'sig' => 'Sig. 1 tab 1x a week in a.m before any intake'
            ),
            31 => array(
                'name' => 'bonviva150',
                'prescription_type_id' => 2,
                'description' => 'Bonviva 150mg tab #4',
                'sig' => 'Sig. 1 tab 1x a month in a.m before any intake.'
            ),
            32 => array(
                'name' => 'polynerve1000',
                'prescription_type_id' => 2,
                'description' => 'Polynerve 1000 tab #60',
                'sig' => 'Sig. 1 tablet 2x a day'
            ),
            33 => array(
                'name' => 'meganerve1000',
                'prescription_type_id' => 2,
                'description' => 'Meganerve 1000 tab #60',
                'sig' => 'Sig. 1 tablet 2x a day'
            ),
            34 => array(
                'name' => 'mecobalamine_methycobal500_6',
                'prescription_type_id' => 2,
                'description' => 'Mecobalamine(Methycobal) 500mcg amp #6',
                'sig' => 'Sig. 1 amp via IM injection every 2 days'
            ),
            35 => array(
                'name' => 'mecobalamine_methycobal500_90',
                'prescription_type_id' => 2,
                'description' => 'Mecobalamine(Methycobal) 500mcg tab #90',
                'sig' => 'Sig. 1 tablet 3x a day'
            ),
            36 => array(
                'name' => 'immunpro',
                'prescription_type_id' => 2,
                'description' => 'ImmunPro tab #30',
                'sig' => 'Sig. 1 tablet once a day after meal'
            ),
            37 => array(
                'name' => 'caltrate',
                'prescription_type_id' => 2,
                'description' => 'Caltrate tab #60',
                'sig' => 'Sig. I tab 2x a day'
            ),
            38 => array(
                'name' => 'calciumade',
                'prescription_type_id' => 2,
                'description' => 'Calciumade tab #60',
                'sig' => 'Sig. 1 tab 2x a day'
            ),
            39 => array(
                'name' => 'appebon',
                'prescription_type_id' => 2,
                'description' => 'Appebon tab# 30',
                'sig' => 'Sig. 1 tablet 1x a day'
            ),
            40 => array(
                'name' => 'nuropat',
                'prescription_type_id' => 2,
                'description' => 'Nuropat tab',
                'sig' => 'Sig. 2x a day for 1 month'
            ),
            41 => array(
                'name' => 'appetite_plus',
                'prescription_type_id' => 2,
                'description' => 'Appetite Plus tab #30',
                'sig' => 'Sig. 1 tablet 1 a day'
            ),
            42 => array(
                'name' => 'appetens',
                'prescription_type_id' => 2,
                'description' => 'Appetens tab #30',
                'sig' => 'Sig. 1 tablet 1 x a day'
            ),
            43 => array(
                'name' => 'appebon_kid120',
                'prescription_type_id' => 2,
                'description' => 'Appebon Kid 120ml Syrup bot #2',
                'sig' => 'Sig. 1 tsp 1x a day'
            ),
            44 => array(
                'name' => 'zegen500',
                'prescription_type_id' => 3,
                'description' => 'Zegen 500mg tab #14',
                'sig' => 'Sig. 1 tab 2x a day'
            ),
            45 => array(
                'name' => 'unasyn625',
                'prescription_type_id' => 3,
                'description' => 'Unasyn 625mg tab #14',
                'sig' => 'Sig. 1 tab 2x a day'
            ),
            46 => array(
                'name' => 'co_amoxiclav625',
                'prescription_type_id' => 3,
                'description' => 'Co-Amoxiclav 625mg tab # 14',
                'sig' => 'Sig. 1 tablet 2x a day'
            ),
            47 => array(
                'name' => 'cloxicillin500_28',
                'prescription_type_id' => 3,
                'description' => 'Cloxicillin 500mg cap # 28',
                'sig' => 'Sig. 1 capsule 4 x a day'
            ),
            48 => array(
                'name' => 'cloxicillin500_56',
                'prescription_type_id' => 3,
                'description' => 'Cloxicillin 500mg cap #56',
                'sig' => 'Sig. 1 capsule x a day for 14 days'
            ),
            49 => array(
                'name' => 'cloxacillin250',
                'prescription_type_id' => 3,
                'description' => 'Cloxacillin 250mg/5ml bot #4',
                'sig' => 'Sig. 1 tsp 3 x a day for 14 days'
            ),
            50 => array(
                'name' => 'cloxacillin125',
                'prescription_type_id' => 3,
                'description' => 'Cloxacillin 125mg/5ml bot #4',
                'sig' => 'Sig. 1 tsp 3 x a day for 14 days'
            ),
            51 => array(
                'name' => 'cefuroxime_zegen250',
                'prescription_type_id' => 3,
                'description' => 'Cefuroxime(Zegen) 250mg cap #14',
                'sig' => 'Sig. 1 capsule 2x a day'
            ),
            52 => array(
                'name' => 'cefuroxime_zegen500',
                'prescription_type_id' => 3,
                'description' => 'Cefuroxime(Zegen) 500mg cap #14',
                'sig' => 'Sig. 1 capsule 2x a day'
            ),
            53 => array(
                'name' => 'cefuroxime250',
                'prescription_type_id' => 3,
                'description' => 'Cefuroxime 250mg/5ml 50ml bot #2',
                'sig' => 'Sig. 1 tsp 2 x a day'
            ),
            54 => array(
                'name' => 'cefuroxime125',
                'prescription_type_id' => 3,
                'description' => 'Cefuroxime 125mg/5ml 50ml bot #2',
                'sig' => 'Sig. 1 tsp 2 x a day'
            ),
            55 => array(
                'name' => 'levofloxacin500',
                'prescription_type_id' => 3,
                'description' => 'Levofloxacin 500mg tab #7',
                'sig' => 'Sig. 1 tablet once a day for 1 week'
            ),
            56 => array(
                'name' => 'levofloxacin750',
                'prescription_type_id' => 3,
                'description' => 'Levofloxacin 750mg tab #7',
                'sig' => 'Sig. 1 tablet once a day for 1 week'
            ),
            57 => array(
                'name' => 'fluconazole150',
                'prescription_type_id' => 3,
                'description' => 'Fluconazole 150mg tab #14',
                'sig' => 'Sig. 1 tablet 1 x a day for 2 weeks'
            ),
            58 => array(
                'name' => 'levox500',
                'prescription_type_id' => 3,
                'description' => 'Levox 500mg tab #7',
                'sig' => 'Sig. 1 tab once a day'
            ),
            59 => array(
                'name' => 'ciprobay1000',
                'prescription_type_id' => 3,
                'description' => 'Ciprobay 1000mg tab #7',
                'sig' => 'Sig. 1 tab 1x a day'
            ),
            60 => array(
                'name' => 'myrin_p_forte120',
                'prescription_type_id' => 3,
                'description' => 'Myrin-P Forte tab #120',
                'sig' => 'Sig. 4 tablets in a.m 1hr before food intake'
            ),
            61 => array(
                'name' => 'myrin_p_forte90',
                'prescription_type_id' => 3,
                'description' => 'Myrin-P Forte tab #90',
                'sig' => 'Sig. 3 tabs OD in 1hr a.m before meal'
            ),
            62 => array(
                'name' => 'myrin120',
                'prescription_type_id' => 3,
                'description' => 'Myrin tab #120',
                'sig' => 'Sig. 4 tablets in a.m 1 hr before food intake'
            ),
            63 => array(
                'name' => 'myrin90',
                'prescription_type_id' => 3,
                'description' => 'Myrin tab #90',
                'sig' => 'Sig. 3 tablets in a.m 1 hr before food intake'
            ),
            64 => array(
                'name' => 'rifampicin300',
                'prescription_type_id' => 3,
                'description' => 'Rifampicin 300mg tab #14',
                'sig' => 'Sig. 1 tablet once a day'
            ),
            65=> array(
                'name' => 'rifampicin200_tbsp',
                'prescription_type_id' => 3,
                'description' => 'Rifampicin 200mg/5ml 120ml bot #2',
                'sig' => 'Sig. 1 tbsp once a day in a.m before food intake'
            ),
            66 => array(
                'name' => 'rifampicin200_tsp',
                'prescription_type_id' => 3,
                'description' => 'Rifampicin 200mg/5ml 120ml bot #2',
                'sig' => 'Sig. 1 tsp once a day in a.m before food intake'
            ),
            67 => array(
                'name' => 'diprospan1_1',
                'prescription_type_id' => 4,
                'description' => 'Diprospan 1ml amp #1',
                'sig' => 'Sig. AD'
            ),
            68 => array(
                'name' => 'diprospan1_2',
                'prescription_type_id' => 4,
                'description' => 'Diprospan 1ml amp #2',
                'sig' => 'Sig. AD'
            ),
            69 => array(
                'name' => 'teriparatide_forteo',
                'prescription_type_id' => 4,
                'description' => 'Teriparatide(Forteo) multi dose prefilled pen set #1',
                'sig' => null
            ),
            70 => array(
                'name' => 'zolendronic_acid_osteomet4',
                'prescription_type_id' => 4,
                'description' => 'Zolendronic Acid(Osteomet) 4mg via l #1',
                'sig' => 'Sig. 1 vial+ 20ml PNSS to be given in 20 min'
            ),
            71 => array(
                'name' => 'hyruan_plus2',
                'prescription_type_id' => 4,
                'description' => 'Hyruan Plus 2.5ml pre-filled syringe #3',
                'sig' => 'Sig. AD'
            ),
            72 => array(
                'name' => 'high_hyal_plus2',
                'prescription_type_id' => 4,
                'description' => 'High Hyal Plus 2ml pre-filled syringe #3',
                'sig' => 'sig. AD'
            ),
            73 => array(
                'name' => 'd50_glucose',
                'prescription_type_id' => 4,
                'description' => 'D50 Glucose Injection bot #1',
                'sig' => null
            ),
            74 => array(
                'name' => 'lidocaine2_1',
                'prescription_type_id' => 4,
                'description' => 'Lidocaine 2% amp #1',
                'sig' => null
            ),
            75 => array(
                'name' => 'lidocaine2_2',
                'prescription_type_id' => 4,
                'description' => 'Lidocaine 2% amp #2',
                'sig' => null
            ),
            76 => array(
                'name' => '1_cc_syringe',
                'prescription_type_id' => 4,
                'description' => '1 cc syringe #1',
                'sig' => null
            ),
            77 => array(
                'name' => '5_cc_syringe',
                'prescription_type_id' => 4,
                'description' => '5 cc syringe #1',
                'sig' => null
            ),
            78 => array(
                'name' => '10_cc_syringe',
                'prescription_type_id' => 4,
                'description' => '10 cc syringe #1',
                'sig' => null
            ),
            79 => array(
                'name' => '1_cc_syringe',
                'prescription_type_id' => 5,
                'description' => '1 cc syringe #1',
                'sig' => null
            ),
            80 => array(
                'name' => '5_cc_syringe',
                'prescription_type_id' => 5,
                'description' => '5 cc syringe #1',
                'sig' => null
            ),
            81 => array(
                'name' => '10_cc_syringe',
                'prescription_type_id' => 5,
                'description' => '10 cc syringe #1',
                'sig' => null
            ),
            82 => array(
                'name' => 'sterile_gauze_pads_10',
                'prescription_type_id' => 5,
                'description' => 'Sterile gauze pads #10',
                'sig' => null
            ),
            83 => array(
                'name' => 'sterile_gauze_pads_20',
                'prescription_type_id' => 5,
                'description' => 'Sterile gauze pads #20',
                'sig' => null
            ),
            84 => array(
                'name' => 'sterile_gauze_pads_30',
                'prescription_type_id' => 5,
                'description' => 'Sterile gauze pads #30',
                'sig' => null
            ),
            85 => array(
                'name' => 'working_globes_box_1',
                'prescription_type_id' => 5,
                'description' => 'Working gloves box #1',
                'sig' => null
            ),
            86 => array(
                'name' => '1_inch_hypoallergenic_plaster_1',
                'prescription_type_id' => 5,
                'description' => '1 inch Hypoallergenic plaster #1',
                'sig' => null
            ),
            87 => array(
                'name' => 'velcro_elastic_bondage_4_inches_2',
                'prescription_type_id' => 5,
                'description' => 'Velcro Elastic Bondage 4 inches #2',
                'sig' => null
            ),
            88 => array(
                'name' => 'velcro_elastic_bondage_6_inches_2',
                'prescription_type_id' => 5,
                'description' => 'Velcro Elastic Bondage 6 inches #2',
                'sig' => null
            ),
            89 => array(
                'name' => 'hydrogen_peroxide_50_ml_bot_1',
                'prescription_type_id' => 5,
                'description' => 'Hydrogen Peroxide 50 ml bot #1',
                'sig' => null
            ),
            90 => array(
                'name' => 'tenpercent_betadine_soln_10_ml_bot_1',
                'prescription_type_id' => 5,
                'description' => '10% Betadine Soln 10 ml bot #1',
                'sig' => null
            ),
            91 => array(
                'name' => 'pnss_1l_bot_1',
                'prescription_type_id' => 5,
                'description' => 'PNSS 1L bot #1',
                'sig' => null
            ),
            92 => array(
                'name' => 'cutasep_f_50ml_bot_1',
                'prescription_type_id' => 5,
                'description' => 'Cutasep F 50ml bot #',
                'sig' => null
            ),
            93 => array(
                'name' => 'cutasep_f_250ml_bot_1',
                'prescription_type_id' => 5,
                'description' => 'Cutasep F 250ml bot #1',
                'sig' => null
            ),
            94 => array(
                'name' => 'prontosan_wound_irrigation_soln_bot_1',
                'prescription_type_id' => 5,
                'description' => 'Prontosan Wound Irrigation Soln bot #1',
                'sig' => null
            ),
            95 => array(
                'name' => 'intrasite_gel_1',
                'prescription_type_id' => 5,
                'description' => 'Intrasite gel #1',
                'sig' => null
            ),
            96 => array(
                'name' => 'iodosorb_powder_1',
                'prescription_type_id' => 5,
                'description' => 'Iodosorb powder #1',
                'sig' => null
            ),
            97 => array(
                'name' => 'iodosorb_gel_1',
                'prescription_type_id' => 5,
                'description' => 'Iodosorb gel #1',
                'sig' => null
            ),
            98 => array(
                'name' => 'mebo_gel_1',
                'prescription_type_id' => 5,
                'description' => 'Mebo gel #1',
                'sig' => null
            ),
            99 => array(
                'name' => 'acticoat_dressing_3',
                'prescription_type_id' => 5,
                'description' => 'Acticoat dressing #3',
                'sig' => null
            ),
            100 => array(
                'name' => 'allevyn_dressing_3',
                'prescription_type_id' => 5,
                'description' => 'Allevyn dressing #3',
                'sig' => null
            ),
            101 => array(
                'name' => 'bactigrass_2',
                'prescription_type_id' => 5,
                'description' => 'Bactigrass #2',
                'sig' => null
            ),
            102 => array(
                'name' => 'mupirocin_(bactroban)_ointment_2',
                'prescription_type_id' => 5,
                'description' => 'Mupirocin(Bactroban) ointment #2',
                'sig' => null
            ),
            103 => array(
                'name' => 'silver_sulfadiazine_(flammazine)_cream_2',
                'prescription_type_id' => 5,
                'description' => 'Silver Sulfadiazine(Flammazine) cream #2',
                'sig' => null
            ),
            104 => array(
                'name' => 'opsite_post_op_6cm_2',
                'prescription_type_id' => 5,
                'description' => 'Opsite post-op dressing 6cm #2',
                'sig' => null
            ),
            105 => array(
                'name' => 'opsite_post_op_10cm_2',
                'prescription_type_id' => 5,
                'description' => 'Opsite post-op dressing 10cm #2',
                'sig' => null
            ),
            106 => array(
                'name' => 'opsite_post_op_15cm_2',
                'prescription_type_id' => 5,
                'description' => 'Opsite post-op dressing 15cm #2',
                'sig' => null
            ),
            107 => array(
                'name' => 'opsite_post_op_20cm_2',
                'prescription_type_id' => 5,
                'description' => 'Opsite post-op dressing 20cm #2',
                'sig' => null
            ),
            108 => array(
                'name' => 'opsite_post_op_25cm_2',
                'prescription_type_id' => 5,
                'description' => 'Opsite post-op dressing 25cm #2',
                'sig' => null
            ),
            109 => array(
                'name' => 'opsite_post_op_30cm_2',
                'prescription_type_id' => 5,
                'description' => 'Opsite post-op dressing 30cm #2',
                'sig' => null
            ),
            110 => array(
                'name' => 'aquacel_ag_dressing_2',
                'prescription_type_id' => 5,
                'description' => 'Aquacel Ag dressing #2',
                'sig' => null
            ),
            111 => array(
                'name' => 'kaltostat_dressing_2',
                'prescription_type_id' => 5,
                'description' => 'Kaltostat dressing #2',
                'sig' => null
            ),
            112 => array(
                'name' => 'three_inch_long_bone_fiber_cast_1',
                'prescription_type_id' => 6,
                'description' => '3 inch Long Bone fiber cast #1',
                'sig' => null
            ),
            113 => array(
                'name' => 'three_inch_long_bone_fiber_cast_2',
                'prescription_type_id' => 6,
                'description' => '3 inch Long Bone fiber cast #2',
                'sig' => null
            ),
            114 => array(
                'name' => 'four_inch_long_bone_fiber_cast_1',
                'prescription_type_id' => 6,
                'description' => '4 inch Long Bone fiber cast #1',
                'sig' => null
            ),
            115 => array(
                'name' => 'four_inch_long_bone_fiber_cast_2',
                'prescription_type_id' => 6,
                'description' => '4 inch Long Bone fiber cast #2',
                'sig' => null
            ),
            116 => array(
                'name' => 'five_inch_long_bone_fiber_cast_1',
                'prescription_type_id' => 6,
                'description' => '5 inch Long Bone fiber cast #1',
                'sig' => null
            ),
            117 => array(
                'name' => 'five_inch_long_bone_fiber_cast_2',
                'prescription_type_id' => 6,
                'description' => '5 inch Long Bone fiber cast #2',
                'sig' => null
            ),
            118 => array(
                'name' => 'four_inch_long_bone_fiber_splint_1',
                'prescription_type_id' => 6,
                'description' => '4 inch Long Bone fiber splint #1',
                'sig' => null
            ),
            119 => array(
                'name' => 'five_inch_long_bone_fiber_splint_1',
                'prescription_type_id' => 6,
                'description' => '5 inch Long Bone fiber splint #1',
                'sig' => null
            ),
            120 => array(
                'name' => 'three_inch_primecast_fiber_cast_1',
                'prescription_type_id' => 6,
                'description' => '3 inch PrimeCast fiber cast #1',
                'sig' => null
            ),
            121 => array(
                'name' => 'three_inch_primecast_fiber_cast_2',
                'prescription_type_id' => 6,
                'description' => '3 inch PrimeCast fiber cast #2',
                'sig' => null
            ),
            122 => array(
                'name' => 'four_inch_primecast_fiber_cast_1',
                'prescription_type_id' => 6,
                'description' => '4 inch PrimeCast fiber cast #1',
                'sig' => null
            ),
            123 => array(
                'name' => 'four_inch_primecast_fiber_cast_2',
                'prescription_type_id' => 6,
                'description' => '4 inch PrimeCast fiber cast #2',
                'sig' => null
            ),
            124 => array(
                'name' => 'five_inch_primecast_fiber_cast_1',
                'prescription_type_id' => 6,
                'description' => '5 inch PrimeCast fiber cast #1',
                'sig' => null
            ),
            125 => array(
                'name' => 'five_inch_primecast_fiber_cast_2',
                'prescription_type_id' => 6,
                'description' => '5 inch PrimeCast fiber cast #2',
                'sig' => null
            ),
            126 => array(
                'name' => 'four_inch_primecast_fiber_splint_1',
                'prescription_type_id' => 6,
                'description' => '4 inch PrimeCast fiber splint #1',
                'sig' => null
            ),
            127 => array(
                'name' => 'five_inch_primecast_fiber_splint_1',
                'prescription_type_id' => 6,
                'description' => '5 inch PrimeCast fiber splint #1',
                'sig' => null
            ),
            128 => array(
                'name' => 'Stockinet_2_inches_1_yard',
                'prescription_type_id' => 6,
                'description' => 'Stockinet 2 inches 1 yard #1',
                'sig' => null
            ),
            129 => array(
                'name' => 'stockinet_3_inches_1_yard',
                'prescription_type_id' => 6,
                'description' => 'Stockinet 3 inches 1 yard #1',
                'sig' => null
            ),
            130 => array(
                'name' => 'stockinet_4_inches_1_yard',
                'prescription_type_id' => 6,
                'description' => 'Stockinet 4 inches 1 yard #1',
                'sig' => null
            ),
            131 => array(
                'name' => 'stockinet_5_inches_1_yard',
                'prescription_type_id' => 6,
                'description' => 'Stockinet 5 inches 1 yard #1',
                'sig' => null
            ),
            132 => array(
                'name' => 'velcro_elastic_bondage_2_inches_1',
                'prescription_type_id' => 6,
                'description' => 'Velcro elastic bondage 2 inches #1',
                'sig' => null
            ),
            133 => array(
                'name' => 'velcro_elastic_bondage_2_inches_2',
                'prescription_type_id' => 6,
                'description' => 'Velcro elastic bondage 2 inches #2',
                'sig' => null
            ),
            134 => array(
                'name' => 'velcro_elastic_bondage_3_inches_1',
                'prescription_type_id' => 6,
                'description' => 'Velcro elastic bondage 3 inches #1',
                'sig' => null
            ),
            135 => array(
                'name' => 'velcro_elastic_bondage_3_inches_2',
                'prescription_type_id' => 6,
                'description' => 'Velcro elastic bondage 3 inches #2',
                'sig' => null
            ),
            136 => array(
                'name' => 'velcro_elastic_bondage_4_inches_1',
                'prescription_type_id' => 6,
                'description' => 'Velcro elastic bondage 4 inches #1',
                'sig' => null
            ),
            137 => array(
                'name' => 'velcro_elastic_bondage_4_inches_2',
                'prescription_type_id' => 6,
                'description' => 'Velcro elastic bondage 4 inches #2',
                'sig' => null
            ),
            138 => array(
                'name' => 'velcro_elastic_bondage_5_inches_1',
                'prescription_type_id' => 6,
                'description' => 'Velcro elastic bondage 5 inches #1',
                'sig' => null
            ),
            139 => array(
                'name' => 'velcro_elastic_bondage_5_inches_2',
                'prescription_type_id' => 6,
                'description' => 'Velcro elastic bondage 5 inches #2',
                'sig' => null
            ),
            140 => array(
                'name' => 'primecast_wadding_sheet_4_inches_1',
                'prescription_type_id' => 6,
                'description' => 'PrimeCast Wadding sheet 4 inches #1',
                'sig' => null
            ),
            141 => array(
                'name' => 'primecast_wadding_sheet_4_inches_2',
                'prescription_type_id' => 6,
                'description' => 'PrimeCast Wadding sheet 4 inches #2',
                'sig' => null
            ),
            142 => array(
                'name' => 'primecast_wadding_sheet_6_inches_1',
                'prescription_type_id' => 6,
                'description' => 'PrimeCast Wadding sheet 6 inches #1',
                'sig' => null
            ),
            143 => array(
                'name' => 'primecast_wadding_sheet_6_inches_2',
                'prescription_type_id' => 6,
                'description' => 'PrimeCast Wadding sheet 6 inches #2',
                'sig' => null
            ),
            144 => array(
                'name' => 'long_bone_armsling_small_size_1',
                'prescription_type_id' => 6,
                'description' => 'Long bone Armsling kiddie size #1',
                'sig' => null
            ),
            145 => array(
                'name' => 'long_bone_armsling_medium_size_1',
                'prescription_type_id' => 6,
                'description' => 'Long bone Armsling small size #1',
                'sig' => null
            ),
            146 => array(
                'name' => 'long_bone_armsling_large_size_1',
                'prescription_type_id' => 6,
                'description' => 'Long bone Armsling medium size #1',
                'sig' => null
            ),
            147 => array(
                'name' => 'long_bone_armsling_xl_size_1',
                'prescription_type_id' => 6,
                'description' => 'Long bone Armsling Large size #1',
                'sig' => null
            ),
            148 => array(
                'name' => 'long_bone_armsling_kiddie_size_1',
                'prescription_type_id' => 6,
                'description' => 'Long bone Armsling X-L size #1',
                'sig' => null
            ),
            149 => array(
                'name' => 'soft_collar_small_1',
                'prescription_type_id' => 7,
                'description' => 'Soft collar small #1',
                'sig' => null
            ),
            150 => array(
                'name' => 'soft_collar_medium_1',
                'prescription_type_id' => 7,
                'description' => 'Soft Collar Medium #1',
                'sig' => null
            ),
            151 => array(
                'name' => 'soft_collar_large_1',
                'prescription_type_id' => 7,
                'description' => 'Soft collar Large #1',
                'sig' => null
            ),
            152 => array(
                'name' => 'hard_collar_small_1',
                'prescription_type_id' => 7,
                'description' => 'Hard collar small #1',
                'sig' => null
            ),
            153 => array(
                'name' => 'hard_collar_medium_1',
                'prescription_type_id' => 7,
                'description' => 'Hard collar medium #1',
                'sig' => null
            ),
            154 => array(
                'name' => 'hard_collar_large_1',
                'prescription_type_id' => 7,
                'description' => 'Hard collar large #1',
                'sig' => null
            ),
            155 => array(
                'name' => 'four_foster_brace',
                'prescription_type_id' => 7,
                'description' => 'Four Foster Brace',
                'sig' => null
            ),
            156 => array(
                'name' => 'halo_vest',
                'prescription_type_id' => 7,
                'description' => 'Halo Vest',
                'sig' => null
            ),
            157 => array(
                'name' => 'jewett_brace',
                'prescription_type_id' => 7,
                'description' => 'Jewett Brace',
                'sig' => null
            ),
            158 => array(
                'name' => 'knight_taylor_brace',
                'prescription_type_id' => 7,
                'description' => 'Knight Taylor Brace',
                'sig' => null
            ),
            159 => array(
                'name' => 'chairback_low_taylor_brace',
                'prescription_type_id' => 7,
                'description' => 'Chairback Low Taylor Brace',
                'sig' => null
            ),
            160 => array(
                'name' => 'milwaukee_brace',
                'prescription_type_id' => 7,
                'description' => 'Milwaukee Brace',
                'sig' => null
            ),
            161 => array(
                'name' => 'shoulder_compression_sleeve',
                'prescription_type_id' => 7,
                'description' => 'Shoulder Compression Sleeve',
                'sig' => null
            ),
            162 => array(
                'name' => 'humeral_fracture_brace',
                'prescription_type_id' => 7,
                'description' => 'Humeral Fracture Brace',
                'sig' => null
            ),
            163 => array(
                'name' => 'elbow_compression_sleeve',
                'prescription_type_id' => 7,
                'description' => 'Elbow Compression Sleeve',
                'sig' => null
            ),
            164 => array(
                'name' => 'static_wrist_splint',
                'prescription_type_id' => 7,
                'description' => 'Static Wrist Splint',
                'sig' => null
            ),
            165 => array(
                'name' => 'wrist_compression_sleeve',
                'prescription_type_id' => 7,
                'description' => 'Wrist Compression Sleeve',
                'sig' => null
            ),
            166 => array(
                'name' => 'ischial_weight_bearing_brace',
                'prescription_type_id' => 7,
                'description' => 'Ischial Weight Bearing Brace',
                'sig' => null
            ),
            167 => array(
                'name' => 'knee_compression_sleeve',
                'prescription_type_id' => 7,
                'description' => 'Knee Compression Sleeve',
                'sig' => null
            ),
            168 => array(
                'name' => 'knee_hinge_brace',
                'prescription_type_id' => 7,
                'description' => 'Knee Hinge Brace',
                'sig' => null
            ),
            169 => array(
                'name' => 'knee_immobilizer',
                'prescription_type_id' => 7,
                'description' => 'Knee Immobilizer',
                'sig' => null
            ),
            170 => array(
                'name' => 'patellar_tendon_strap',
                'prescription_type_id' => 7,
                'description' => 'Patellar Tendon Strap',
                'sig' => null
            ),
            171 => array(
                'name' => 'ankle_compression_sleeve',
                'prescription_type_id' => 7,
                'description' => 'Ankle Compression Sleeve',
                'sig' => null
            ),
            172 => array(
                'name' => 'walker_boots',
                'prescription_type_id' => 7,
                'description' => 'Walker Boots',
                'sig' => null
            ),
            173 => array(
                'name' => 'compression_foot_sleeve',
                'prescription_type_id' => 7,
                'description' => 'Compression Foot Sleeve',
                'sig' => null
            ),
            174 => array(
                'name' => 'silicon_insole_medial_arch_support',
                'prescription_type_id' => 7,
                'description' => 'Silicon Insole Medial Arch Support',
                'sig' => null
            ),
            175 => array(
                'name' => 'backjoy_sitsmart_posture_plus_travelclub',
                'prescription_type_id' => 7,
                'description' => 'Backjoy SitSmart Posture Plus TravelClub',
                'sig' => null
            )
        ));
    }
}
