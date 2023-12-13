<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bus extends Model
{

    protected $fillable=[
        'status_id'
    ];

    use HasFactory, SoftDeletes;

    public function bus_mark(){
        return $this->belongsTo(BusMark::class);
    }

    public function bus_model(){
        return $this->belongsTo(BusModel::class);
    }

    public function employees(){
        return $this->hasMany(Employee::class);
    }

    public function status(){
        return $this->belongsTo(Status::class);
    }

    public function bus_route(){
        return $this->belongsTo(BusRoute::class);
    }
}
