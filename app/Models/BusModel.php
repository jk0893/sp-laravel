<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BusModel extends Model
{
    use HasFactory, SoftDeletes;

    public function buses(){
        return $this->hasMany(Bus::class, 'bus_id', 'id');
    }
}
