<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    use HasFactory; 

    public function getDoctor(){

       return $this->hasMany('App\Models\Treatments','id','branch_name');

    }
}
