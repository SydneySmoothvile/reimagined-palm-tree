<?php

namespace Database\Seeders;

use Database\Factories\CompanyFactory;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fact = new CompanyFactory();
        $fact->count(1000)
            ->create();
    }
}
