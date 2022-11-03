<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Treatment;
use App\Models\Branch;

class Doctorcontroller extends Controller
{
    public function getIndex(){
        $doctors=Doctor::getDoctors();
        $treatments=Treatment::all();
        return view('index',compact('doctors'));
    }
    
    public function index(){
        $branches=Branch::all();
        return view('doctorkayit')->with([
            'branches' =>$branches
        ]);
    }

   public function doktorekle(Request $request){
    $name=$request->input('doctor_name');
    $branch=$request->input('branch_id');
    Doctor::create([
        "doctor_name"=>$name,
        "branch_id"=>$branch,
    ]);
    return redirect()->route('index');
   }
   
   public function doktordelete($doctor_id){
    Doctor::where('id',$doctor_id)->delete();
    return redirect()->route('index');
     }   
}
