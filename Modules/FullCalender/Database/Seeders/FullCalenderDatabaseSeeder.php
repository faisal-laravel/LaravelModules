<?php

namespace Modules\FullCalender\Database\Seeders;

use Illuminate\Database\Seeder;


use Illuminate\Database\Eloquent\Model;

class FullCalenderDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(AddDummyEventTableSeeder::class);
    }
}
