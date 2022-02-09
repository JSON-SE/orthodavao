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
                'description' => 'Arcoxia 120mg tablet #7',
                'sig' => 'Sig. 1 tablet once a day after meal'
        ),
            2 => array(
                'name' => 'arcoxia90',
                'description' => 'Arcoxia 90mg tablet #10',
                'sig' => 'Sig. 1 tablet once a day after meal'
        ),
            3 => array(
                'name' => 'arcoxia60',
                'description' => 'Arcoxia 60mg tablet #20',
                'sig' => 'Sig. 1 tablet 2x a day after meal'
        ),
            4 => array(
                'name' => 'celebrex400',
                'description' => 'Celebrex 400 mg capsule #14',
                'sig' => 'Sig. 1 tablet once a day after meal'
        ),
            5 => array(
                'name' => 'celebrex200',
                'description' => 'Celebrex 200 mg capsule #14',
                'sig' => 'Sig. 1 tablet 2x a day after meal'
        ),
            6 => array(
                'name' => 'celcoxx400',
                'description' => 'Celcoxx 400 mg capsule #14',
                'sig' => 'Sig. 1 tablet once a day after meal'
        ),
            7 => array(
                'name' => 'celcoxx200',
                'description' => 'Celcoxx 200 mg capsule #14',
                'sig' => 'Sig. 1 tablet 2x a day after meal'
        ),
            8 => array(
                'name' => 'oxycodone10',
                'description' => 'Oxycodone 10mg tab #15',
                'sig' => 'Sig. 1 tablet once a day at night time'
        ),
            9 => array(
                'name' => 'dolcet',
                'description' => 'Dolcet tab #21',
                'sig' => 'Sig. 1 tab 3x a day'
        ),
            10 => array(
                'name' => 'dolcetmini',
                'description' => 'Dolcet mini  tab #21',
                'sig' => 'Sig. 1 tab 3x a day'
        ),
            11 => array(
                'name' => 'paratram',
                'description' => 'Paratram tab #21',
                'sig' => 'Sig. 1 tablet 3 x a day'
        ),
            12 => array(
                'name' => 'mefenamic_acid250',
                'description' => 'Mefenamic Acid 250 mg cap #21',
                'sig' => 'Sig. 1 cap 3x a day'
        ),
            13 => array(
                'name' => 'mefenamic_acid50',
                'description' => 'Mefenamic Acid 50mg/5ml bot #2',
                'sig' => 'Sig. 2 tsp every 6 hrs as needed'
        ),
            14 => array(
                'name' => 'mefenamic_acid50_2',
                'description' => 'Mefenamic Acid 50mg/5ml bot #2',
                'sig' => 'Sig. 1 tbsp every 6 hrs as needed'
        ),
            15 => array(
                'name' => 'paracetamol_biogesic500',
                'description' => 'Paracetamol(Biogesic) 500mg tab #12',
                'sig' => 'Sig. 1 tab every 4 hrs as needed'
        ),
            16 => array(
                'name' => 'paracetamol_tempra250',
                'description' => 'Paracetamol(Tempra) 250mg/5ml 60ml bot#2',
                'sig' => 'Sig. 1 tbsp every 4 hrs as needed.'
        ),
            17 => array(
                'name' => 'paracetamol_tempra125',
                'description' => 'Paracetamol(Tempra) 125mg/5ml 60ml bot#2',
                'sig' => 'Sig. 1 tsp every 4 hrs as needed.'
        ),
            18 => array(
                'name' => 'lyrica75',
                'description' => 'Lyrica 75mg cap #21',
                'sig' => 'Sig. 1 cap 2x a day'
        ),
            19 => array(
                'name' => 'lyrica50',
                'description' => 'Lyrica 50mg cap #21',
                'sig' => 'Sig. 1 cap 2x a day'
        ),
            20 => array(
                'name' => 'gabix300',
                'description' => 'Gabix 300mg cap #21',
                'sig' => 'Sig. 1 cap 3x a day'
        ),
            21 => array(
                'name' => 'gabix100',
                'description' => 'Gabix 100mg cap #21',
                'sig' => 'Sig. 1 capsule 3x a day'
        ),
            22 => array(
                'name' => 'norgesic_forte',
                'description' => 'Norgesic Forte tab #21',
                'sig' => 'Sig. I tab 3x a day'
        ),
            23 => array(
                'name' => 'myonal',
                'description' => 'Myonal tab #21',
                'sig' => 'Sig. 1 tab 3x a day'
        ),
            24 => array(
                'name' => 'baclofen10',
                'description' => 'Baclofen 10mg tab #21',
                'sig' => 'Sig. 1 tablet 3x a day'
        ),
            25 => array(
                'name' => 'dexamethasone_decilone_Forte4',
                'description' => 'Dexamethasone(Decilone Forte) 4mg tab #4',
                'sig' => 'Sig. 1 tablet once a day after meal'
        ),
            26 => array(
                'name' => 'prednisolone10',
                'description' => 'Prednisolone(Pred 10) 10mg tab #4',
                'sig' => 'Sig. 1 tablet once a day'
        ),
            27 => array(
                'name' => 'mecobalamine500',
                'description' => 'Mecobalamine 500mcg tab # 30',
                'sig' => 'Sig. 1 tab 3x a day'
        ),
            28 => array(
                'name' => 'deiprospan',
                'description' => 'Diprospan amp #1',
                'sig' => 'Sig. AD'
        ),
            29 => array(
                'name' => 'fosavance6500',
                'description' => 'Fosavance 6500IU tab #8',
                'sig' => 'Sig. 1 tab 1x a week in a.m before any intake'
        ),
            30 => array(
                'name' => 'reventa',
                'description' => 'Reventa tab #8',
                'sig' => 'Sig. 1 tab 1x a week in a.m before any intake'
        ),
            31 => array(
                'name' => 'bonviva150',
                'description' => 'Bonviva 150mg tab #4',
                'sig' => 'Sig. 1 tab 1x a month in a.m before any intake.'
        ),
            32 => array(
                'name' => 'polynerve1000',
                'description' => 'Polynerve 1000 tab #60',
                'sig' => 'Sig. 1 tablet 2x a day'
        ),
            33 => array(
                'name' => 'meganerve1000',
                'description' => 'Meganerve 1000 tab #60',
                'sig' => 'Sig. 1 tablet 2x a day'
        ),
            34 => array(
                'name' => 'mecobalamine_methycobal500_6',
                'description' => 'Mecobalamine(Methycobal) 500mcg amp #6',
                'sig' => 'Sig. 1 amp via IM injection every 2 days'
        ),
            35 => array(
                'name' => 'mecobalamine_methycobal500_90',
                'description' => 'Mecobalamine(Methycobal) 500mcg tab #90',
                'sig' => 'Sig. 1 tablet 3x a day'
        ),
            36 => array(
                'name' => 'immunpro',
                'description' => 'ImmunPro tab #30',
                'sig' => 'Sig. 1 tablet once a day after meal'
        ),
            37 => array(
                'name' => 'caltrate',
                'description' => 'Caltrate tab #60',
                'sig' => 'Sig. I tab 2x a day'
        ),
            38 => array(
                'name' => 'calciumade',
                'description' => 'Calciumade tab #60',
                'sig' => 'Sig. 1 tab 2x a day'
        ),
            39 => array(
                'name' => 'appebon',
                'description' => 'Appebon tab# 30',
                'sig' => 'Sig. 1 tablet 1x a day'
        ),
            40 => array(
                'name' => 'nuropat',
                'description' => 'Nuropat tab',
                'sig' => 'Sig. 2x a day for 1 month'
        ),
            41 => array(
                'name' => 'appetite_plus',
                'description' => 'Appetite Plus tab #30',
                'sig' => 'Sig. 1 tablet 1 a day'
        ),
            42 => array(
                'name' => 'appetens',
                'description' => 'Appetens tab #30',
                'sig' => 'Sig. 1 tablet 1 x a day'
        ),
            43 => array(
                'name' => 'appebon_kid120',
                'description' => 'Appebon Kid 120ml Syrup bot #2',
                'sig' => 'Sig. 1 tsp 1x a day'
        ),
            44 => array(
                'name' => 'zegen500',
                'description' => 'Zegen 500mg tab #14',
                'sig' => 'Sig. 1 tab 2x a day'
        ),
            45 => array(
                'name' => 'unasyn625',
                'description' => 'Unasyn 625mg tab #14',
                'sig' => 'Sig. 1 tab 2x a day'
        ),
            46 => array(
                'name' => 'co_amoxiclav625',
                'description' => 'Co-Amoxiclav 625mg tab # 14',
                'sig' => 'Sig. 1 tablet 2x a day'
        ),
            47 => array(
                'name' => 'cloxicillin500_28',
                'description' => 'Cloxicillin 500mg cap # 28',
                'sig' => 'Sig. 1 capsule 4 x a day'
        ),
            48 => array(
                'name' => 'cloxicillin500_56',
                'description' => 'Cloxicillin 500mg cap #56',
                'sig' => 'Sig. 1 capsule x a day for 14 days'
        ),
            49 => array(
                'name' => 'cloxacillin250',
                'description' => 'Cloxacillin 250mg/5ml bot #4',
                'sig' => 'Sig. 1 tsp 3 x a day for 14 days'
        ),
            50 => array(
                'name' => 'cloxacillin125',
                'description' => 'Cloxacillin 125mg/5ml bot #4',
                'sig' => 'Sig. 1 tsp 3 x a day for 14 days'
        ),
            51 => array(
                'name' => 'cefuroxime_zegen250',
                'description' => 'Cefuroxime(Zegen) 250mg cap #14',
                'sig' => 'Sig. 1 capsule 2x a day'
        ),
            52 => array(
                'name' => 'cefuroxime_zegen500',
                'description' => 'Cefuroxime(Zegen) 500mg cap #14',
                'sig' => 'Sig. 1 capsule 2x a day'
        ),
            53 => array(
                'name' => 'cefuroxime250',
                'description' => 'Cefuroxime 250mg/5ml 50ml bot #2',
                'sig' => 'Sig. 1 tsp 2 x a day'
        ),
            54 => array(
                'name' => 'cefuroxime125',
                'description' => 'Cefuroxime 125mg/5ml 50ml bot #2',
                'sig' => 'Sig. 1 tsp 2 x a day'
        ),
            55 => array(
                'name' => 'levofloxacin500',
                'description' => 'Levofloxacin 500mg tab #7',
                'sig' => 'Sig. 1 tablet once a day for 1 week'
        ),
            56 => array(
                'name' => 'levofloxacin750',
                'description' => 'Levofloxacin 750mg tab #7',
                'sig' => 'Sig. 1 tablet once a day for 1 week'
        ),
            57 => array(
                'name' => 'fluconazole150',
                'description' => 'Fluconazole 150mg tab #14',
                'sig' => 'Sig. 1 tablet 1 x a day for 2 weeks'
        ),
            58 => array(
                'name' => 'levox500',
                'description' => 'Levox 500mg tab #7',
                'sig' => 'Sig. 1 tab once a day'
        ),
            59 => array(
                'name' => 'ciprobay1000',
                'description' => 'Ciprobay 1000mg tab #7',
                'sig' => 'Sig. 1 tab 1x a day'
        ),
            60 => array(
                'name' => 'myrin_p_forte120',
                'description' => 'Myrin-P Forte tab #120',
                'sig' => 'Sig. 4 tablets in a.m 1hr before food intake'
        ),
            61 => array(
                'name' => 'myrin_p_forte90',
                'description' => 'Myrin-P Forte tab #90',
                'sig' => 'Sig. 3 tabs OD in 1hr a.m before meal'
        ),
            62 => array(
                'name' => 'myrin120',
                'description' => 'Myrin tab #120',
                'sig' => 'Sig. 4 tablets in a.m 1 hr before food intake'
        ),
            63 => array(
                'name' => 'myrin90',
                'description' => 'Myrin tab #90',
                'sig' => 'Sig. 3 tablets in a.m 1 hr before food intake'
        ),
            64 => array(
                'name' => 'rifampicin300',
                'description' => 'Rifampicin 300mg tab #14',
                'sig' => 'Sig. 1 tablet once a day'
        ),
            65=> array(

                'name' => 'rifampicin200_tbsp',
                'description' => 'Rifampicin 200mg/5ml 120ml bot #2',
                'sig' => 'Sig. 1 tbsp once a day in a.m before food intake'
        ),
            66 => array(
                'name' => 'rifampicin200_tsp',
                'description' => 'Rifampicin 200mg/5ml 120ml bot #2',
                'sig' => 'Sig. 1 tsp once a day in a.m before food intake'
        ),

        ));
    }
}
