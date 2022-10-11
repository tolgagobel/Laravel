<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Treatment;

class Doctorcontroller extends Controller
{
    public function getIndex(){

        $doctor=Doctor::all();

        return view('index',compact('doctor'));

    }

    public function tedavi($doctor_id){

        $treatments=Treatment::where('id',$doctor_id)->get();

        return view('treatment',compact('treatments'));
    }


    public function index(){

        return view('doctorkayit');

    }

   public function ekle(Request $request){
    
    $name=$request->name;
    $branch=$request->branch;

    Doctor::create([

        "doctor_name"=>$name,
        "doctor_branch"=>$branch,

    ]);

   }

   public function delete($doctor_id){

    Doctor::where('id',$doctor_id)->delete();
    return redirect()->route('index');


     }
   
}
