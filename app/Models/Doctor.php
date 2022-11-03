<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    public $table="doctors";
    public $fillable=["doctor_name","branch_id","updated_at","created_at"];
    public $timestamps=false;

    public function branch(){
        return $this->belongsTo(Branch::class);
    }


    public static function getDoctors() {
        return Doctor::with('branch')->get();
    }

}
