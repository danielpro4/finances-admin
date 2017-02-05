<?php

use FinancesAdmin\Models\Spent;
use Illuminate\Database\Seeder;

class SpentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Spent::class, 5)->create();
    }
}
