<?php

namespace Modules\FullCalender\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    protected static function newFactory()
    {
        return \Modules\FullCalender\Database\factories\EventFactory::new();
    }
}
