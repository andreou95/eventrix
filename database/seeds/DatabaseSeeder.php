<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(EventStatusSeeder::class);
        $this->call(SicDivisionsTableSeeder::class);
        $this->call(SicSectionTableSeeder::class);
    }
}
