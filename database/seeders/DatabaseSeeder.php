<?php

namespace Database\Seeders;

use App\Models\MriRequest;
use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\MriRequestSeeder;
use Database\Seeders\XrayRequestSeeder;
use Database\Seeders\LaboratoryRequestSeeder;
use Database\Seeders\UltrasoundRequestSeeder;
use Database\Seeders\PhilippineCitiesTableSeeder;
use Database\Seeders\PhilippineRegionsTableSeeder;
use Database\Seeders\PhilippineBarangaysTableSeeder;
use Database\Seeders\PhilippineProvincesTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(RoleSeeder::class);
        $this->call(PhilippineRegionsTableSeeder::class);
        $this->call(PhilippineProvincesTableSeeder::class);
        $this->call(PhilippineCitiesTableSeeder::class);
        $this->call(PhilippineBarangaysTableSeeder::class);
        $this->call(XrayRequestSeeder::class);
        $this->call(UltrasoundRequestSeeder::class);
        $this->call(LaboratoryRequestSeeder::class);
        $this->call(MriRequestSeeder::class);
    }
}
