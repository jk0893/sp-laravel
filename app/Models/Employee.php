<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory, SoftDeletes;

    public function user(){
        return $this->hasOne(User::class);
    }

    public function bus()
    {
        return $this->belongsTo(Bus::class);
    }
}
