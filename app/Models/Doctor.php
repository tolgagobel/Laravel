<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    public $table="doctors";
    public $fillable=["doctor_name","doctor_branch","updated_at","created_at"];
    public $timestamps=false;
  

}
