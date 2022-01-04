<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PhilippineProvincesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('philippine_provinces')->delete();
        
        \DB::table('philippine_provinces')->insert(array (
            0 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 1,
                'province_code' => '0128',
                'province_description' => 'ILOCOS NORTE',
                'psgc_code' => '012800000',
                'region_code' => '01',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            1 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 2,
                'province_code' => '0129',
                'province_description' => 'ILOCOS SUR',
                'psgc_code' => '012900000',
                'region_code' => '01',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            2 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 3,
                'province_code' => '0133',
                'province_description' => 'LA UNION',
                'psgc_code' => '013300000',
                'region_code' => '01',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            3 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 4,
                'province_code' => '0155',
                'province_description' => 'PANGASINAN',
                'psgc_code' => '015500000',
                'region_code' => '01',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            4 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 5,
                'province_code' => '0209',
                'province_description' => 'BATANES',
                'psgc_code' => '020900000',
                'region_code' => '02',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            5 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 6,
                'province_code' => '0215',
                'province_description' => 'CAGAYAN',
                'psgc_code' => '021500000',
                'region_code' => '02',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            6 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 7,
                'province_code' => '0231',
                'province_description' => 'ISABELA',
                'psgc_code' => '023100000',
                'region_code' => '02',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            7 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 8,
                'province_code' => '0250',
                'province_description' => 'NUEVA VIZCAYA',
                'psgc_code' => '025000000',
                'region_code' => '02',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            8 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 9,
                'province_code' => '0257',
                'province_description' => 'QUIRINO',
                'psgc_code' => '025700000',
                'region_code' => '02',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            9 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 10,
                'province_code' => '0308',
                'province_description' => 'BATAAN',
                'psgc_code' => '030800000',
                'region_code' => '03',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            10 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 11,
                'province_code' => '0314',
                'province_description' => 'BULACAN',
                'psgc_code' => '031400000',
                'region_code' => '03',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            11 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 12,
                'province_code' => '0349',
                'province_description' => 'NUEVA ECIJA',
                'psgc_code' => '034900000',
                'region_code' => '03',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            12 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 13,
                'province_code' => '0354',
                'province_description' => 'PAMPANGA',
                'psgc_code' => '035400000',
                'region_code' => '03',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            13 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 14,
                'province_code' => '0369',
                'province_description' => 'TARLAC',
                'psgc_code' => '036900000',
                'region_code' => '03',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            14 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 15,
                'province_code' => '0371',
                'province_description' => 'ZAMBALES',
                'psgc_code' => '037100000',
                'region_code' => '03',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            15 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 16,
                'province_code' => '0377',
                'province_description' => 'AURORA',
                'psgc_code' => '037700000',
                'region_code' => '03',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            16 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 17,
                'province_code' => '0410',
                'province_description' => 'BATANGAS',
                'psgc_code' => '041000000',
                'region_code' => '04',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            17 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 18,
                'province_code' => '0421',
                'province_description' => 'CAVITE',
                'psgc_code' => '042100000',
                'region_code' => '04',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            18 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 19,
                'province_code' => '0434',
                'province_description' => 'LAGUNA',
                'psgc_code' => '043400000',
                'region_code' => '04',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            19 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 20,
                'province_code' => '0456',
                'province_description' => 'QUEZON',
                'psgc_code' => '045600000',
                'region_code' => '04',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            20 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 21,
                'province_code' => '0458',
                'province_description' => 'RIZAL',
                'psgc_code' => '045800000',
                'region_code' => '04',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            21 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 22,
                'province_code' => '1740',
                'province_description' => 'MARINDUQUE',
                'psgc_code' => '174000000',
                'region_code' => '17',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            22 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 23,
                'province_code' => '1751',
                'province_description' => 'OCCIDENTAL MINDORO',
                'psgc_code' => '175100000',
                'region_code' => '17',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            23 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 24,
                'province_code' => '1752',
                'province_description' => 'ORIENTAL MINDORO',
                'psgc_code' => '175200000',
                'region_code' => '17',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            24 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 25,
                'province_code' => '1753',
                'province_description' => 'PALAWAN',
                'psgc_code' => '175300000',
                'region_code' => '17',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            25 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 26,
                'province_code' => '1759',
                'province_description' => 'ROMBLON',
                'psgc_code' => '175900000',
                'region_code' => '17',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            26 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 27,
                'province_code' => '0505',
                'province_description' => 'ALBAY',
                'psgc_code' => '050500000',
                'region_code' => '05',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            27 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 28,
                'province_code' => '0516',
                'province_description' => 'CAMARINES NORTE',
                'psgc_code' => '051600000',
                'region_code' => '05',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            28 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 29,
                'province_code' => '0517',
                'province_description' => 'CAMARINES SUR',
                'psgc_code' => '051700000',
                'region_code' => '05',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            29 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 30,
                'province_code' => '0520',
                'province_description' => 'CATANDUANES',
                'psgc_code' => '052000000',
                'region_code' => '05',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            30 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 31,
                'province_code' => '0541',
                'province_description' => 'MASBATE',
                'psgc_code' => '054100000',
                'region_code' => '05',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            31 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 32,
                'province_code' => '0562',
                'province_description' => 'SORSOGON',
                'psgc_code' => '056200000',
                'region_code' => '05',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            32 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 33,
                'province_code' => '0604',
                'province_description' => 'AKLAN',
                'psgc_code' => '060400000',
                'region_code' => '06',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            33 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 34,
                'province_code' => '0606',
                'province_description' => 'ANTIQUE',
                'psgc_code' => '060600000',
                'region_code' => '06',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            34 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 35,
                'province_code' => '0619',
                'province_description' => 'CAPIZ',
                'psgc_code' => '061900000',
                'region_code' => '06',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            35 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 36,
                'province_code' => '0630',
                'province_description' => 'ILOILO',
                'psgc_code' => '063000000',
                'region_code' => '06',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            36 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 37,
                'province_code' => '0645',
                'province_description' => 'NEGROS OCCIDENTAL',
                'psgc_code' => '064500000',
                'region_code' => '06',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            37 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 38,
                'province_code' => '0679',
                'province_description' => 'GUIMARAS',
                'psgc_code' => '067900000',
                'region_code' => '06',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            38 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 39,
                'province_code' => '0712',
                'province_description' => 'BOHOL',
                'psgc_code' => '071200000',
                'region_code' => '07',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            39 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 40,
                'province_code' => '0722',
                'province_description' => 'CEBU',
                'psgc_code' => '072200000',
                'region_code' => '07',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            40 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 41,
                'province_code' => '0746',
                'province_description' => 'NEGROS ORIENTAL',
                'psgc_code' => '074600000',
                'region_code' => '07',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            41 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 42,
                'province_code' => '0761',
                'province_description' => 'SIQUIJOR',
                'psgc_code' => '076100000',
                'region_code' => '07',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            42 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 43,
                'province_code' => '0826',
                'province_description' => 'EASTERN SAMAR',
                'psgc_code' => '082600000',
                'region_code' => '08',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            43 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 44,
                'province_code' => '0837',
                'province_description' => 'LEYTE',
                'psgc_code' => '083700000',
                'region_code' => '08',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            44 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 45,
                'province_code' => '0848',
                'province_description' => 'NORTHERN SAMAR',
                'psgc_code' => '084800000',
                'region_code' => '08',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            45 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 46,
                'province_code' => '0860',
            'province_description' => 'SAMAR (WESTERN SAMAR)',
                'psgc_code' => '086000000',
                'region_code' => '08',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            46 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 47,
                'province_code' => '0864',
                'province_description' => 'SOUTHERN LEYTE',
                'psgc_code' => '086400000',
                'region_code' => '08',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            47 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 48,
                'province_code' => '0878',
                'province_description' => 'BILIRAN',
                'psgc_code' => '087800000',
                'region_code' => '08',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            48 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 49,
                'province_code' => '0972',
                'province_description' => 'ZAMBOANGA DEL NORTE',
                'psgc_code' => '097200000',
                'region_code' => '09',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            49 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 50,
                'province_code' => '0973',
                'province_description' => 'ZAMBOANGA DEL SUR',
                'psgc_code' => '097300000',
                'region_code' => '09',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            50 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 51,
                'province_code' => '0983',
                'province_description' => 'ZAMBOANGA SIBUGAY',
                'psgc_code' => '098300000',
                'region_code' => '09',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            51 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 52,
                'province_code' => '0997',
                'province_description' => 'CITY OF ISABELA',
                'psgc_code' => '099700000',
                'region_code' => '09',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            52 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 53,
                'province_code' => '1013',
                'province_description' => 'BUKIDNON',
                'psgc_code' => '101300000',
                'region_code' => '10',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            53 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 54,
                'province_code' => '1018',
                'province_description' => 'CAMIGUIN',
                'psgc_code' => '101800000',
                'region_code' => '10',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            54 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 55,
                'province_code' => '1035',
                'province_description' => 'LANAO DEL NORTE',
                'psgc_code' => '103500000',
                'region_code' => '10',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            55 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 56,
                'province_code' => '1042',
                'province_description' => 'MISAMIS OCCIDENTAL',
                'psgc_code' => '104200000',
                'region_code' => '10',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            56 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 57,
                'province_code' => '1043',
                'province_description' => 'MISAMIS ORIENTAL',
                'psgc_code' => '104300000',
                'region_code' => '10',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            57 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 58,
                'province_code' => '1123',
                'province_description' => 'DAVAO DEL NORTE',
                'psgc_code' => '112300000',
                'region_code' => '11',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            58 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 59,
                'province_code' => '1124',
                'province_description' => 'DAVAO DEL SUR',
                'psgc_code' => '112400000',
                'region_code' => '11',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            59 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 60,
                'province_code' => '1125',
                'province_description' => 'DAVAO ORIENTAL',
                'psgc_code' => '112500000',
                'region_code' => '11',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            60 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 61,
                'province_code' => '1182',
                'province_description' => 'DAVAO DE ORO',
                'psgc_code' => '118200000',
                'region_code' => '11',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            61 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 62,
                'province_code' => '1186',
                'province_description' => 'DAVAO OCCIDENTAL',
                'psgc_code' => '118600000',
                'region_code' => '11',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            62 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 63,
                'province_code' => '1247',
            'province_description' => 'COTABATO (NORTH COTABATO)',
                'psgc_code' => '124700000',
                'region_code' => '12',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            63 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 64,
                'province_code' => '1263',
                'province_description' => 'SOUTH COTABATO',
                'psgc_code' => '126300000',
                'region_code' => '12',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            64 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 65,
                'province_code' => '1265',
                'province_description' => 'SULTAN KUDARAT',
                'psgc_code' => '126500000',
                'region_code' => '12',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            65 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 66,
                'province_code' => '1280',
                'province_description' => 'SARANGANI',
                'psgc_code' => '128000000',
                'region_code' => '12',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            66 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 67,
                'province_code' => '1298',
                'province_description' => 'COTABATO CITY',
                'psgc_code' => '129800000',
                'region_code' => '12',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            67 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 68,
                'province_code' => '1339',
                'province_description' => 'NCR, CITY OF MANILA, FIRST DISTRICT',
                'psgc_code' => '133900000',
                'region_code' => '13',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            68 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 69,
                'province_code' => '1339',
                'province_description' => 'CITY OF MANILA',
                'psgc_code' => '133900000',
                'region_code' => '13',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            69 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 70,
                'province_code' => '1374',
                'province_description' => 'NCR, SECOND DISTRICT',
                'psgc_code' => '137400000',
                'region_code' => '13',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            70 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 71,
                'province_code' => '1375',
                'province_description' => 'NCR, THIRD DISTRICT',
                'psgc_code' => '137500000',
                'region_code' => '13',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            71 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 72,
                'province_code' => '1376',
                'province_description' => 'NCR, FOURTH DISTRICT',
                'psgc_code' => '137600000',
                'region_code' => '13',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            72 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 73,
                'province_code' => '1401',
                'province_description' => 'ABRA',
                'psgc_code' => '140100000',
                'region_code' => '14',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            73 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 74,
                'province_code' => '1411',
                'province_description' => 'BENGUET',
                'psgc_code' => '141100000',
                'region_code' => '14',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            74 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 75,
                'province_code' => '1427',
                'province_description' => 'IFUGAO',
                'psgc_code' => '142700000',
                'region_code' => '14',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            75 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 76,
                'province_code' => '1432',
                'province_description' => 'KALINGA',
                'psgc_code' => '143200000',
                'region_code' => '14',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            76 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 77,
                'province_code' => '1444',
                'province_description' => 'MOUNTAIN PROVINCE',
                'psgc_code' => '144400000',
                'region_code' => '14',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            77 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 78,
                'province_code' => '1481',
                'province_description' => 'APAYAO',
                'psgc_code' => '148100000',
                'region_code' => '14',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            78 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 79,
                'province_code' => '1507',
                'province_description' => 'BASILAN',
                'psgc_code' => '150700000',
                'region_code' => '15',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            79 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 80,
                'province_code' => '1536',
                'province_description' => 'LANAO DEL SUR',
                'psgc_code' => '153600000',
                'region_code' => '15',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            80 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 81,
                'province_code' => '1538',
                'province_description' => 'MAGUINDANAO',
                'psgc_code' => '153800000',
                'region_code' => '15',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            81 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 82,
                'province_code' => '1566',
                'province_description' => 'SULU',
                'psgc_code' => '156600000',
                'region_code' => '15',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            82 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 83,
                'province_code' => '1570',
                'province_description' => 'TAWI-TAWI',
                'psgc_code' => '157000000',
                'region_code' => '15',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            83 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 84,
                'province_code' => '1602',
                'province_description' => 'AGUSAN DEL NORTE',
                'psgc_code' => '160200000',
                'region_code' => '16',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            84 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 85,
                'province_code' => '1603',
                'province_description' => 'AGUSAN DEL SUR',
                'psgc_code' => '160300000',
                'region_code' => '16',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            85 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 86,
                'province_code' => '1667',
                'province_description' => 'SURIGAO DEL NORTE',
                'psgc_code' => '166700000',
                'region_code' => '16',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            86 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 87,
                'province_code' => '1668',
                'province_description' => 'SURIGAO DEL SUR',
                'psgc_code' => '166800000',
                'region_code' => '16',
                'updated_at' => '2021-12-15 19:05:15',
            ),
            87 => 
            array (
                'created_at' => '2021-12-15 19:05:15',
                'id' => 88,
                'province_code' => '1685',
                'province_description' => 'DINAGAT ISLANDS',
                'psgc_code' => '168500000',
                'region_code' => '16',
                'updated_at' => '2021-12-15 19:05:15',
            ),
        ));
        
        
    }
}