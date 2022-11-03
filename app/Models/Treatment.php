<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    use HasFactory; 
    public $table="treatments";
    public $fillable=["treatment_name","treatment_fee","doctor_id","branch_id","updated_at","created_at"];
    public $timestamps=false;

    public function doctor(){
       return $this->hasOne(Doctor::class, 'id', 'doctor_id');
    }

    public function branch(){
        return $this->belongsTo(Branch::class);
    }
    public function getBranch(){
        return Treatment::with('branch')->get();
    }
}
