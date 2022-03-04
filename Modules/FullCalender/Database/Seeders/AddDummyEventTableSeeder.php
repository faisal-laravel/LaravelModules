<?php

namespace Modules\FullCalender\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\FullCalender\Entities\Event;

class AddDummyEventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        	['title'=>'Demo Event-1', 'start'=>'2022-01-11', 'end'=>'2022-02-12'],
        	['title'=>'Demo Event-2', 'start'=>'2022-02-11', 'end'=>'2022-02-13'],
        	['title'=>'Demo Event-3', 'start'=>'2022-02-14', 'end'=>'2022-02-14'],
        	['title'=>'Demo Event-3', 'start'=>'2022-02-17', 'end'=>'2022-02-17'],
        ];
        foreach ($data as $key => $value) {
        	Event::create($value);
        }
    }
}
