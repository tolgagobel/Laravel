<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Treatment;
use App\Models\Branch;

class TreatmentController extends Controller
{
    public function tedavi(Doctor $doctor){
        $treatments=Treatment::where('doctor_id',$doctor->id)->with('doctor')->get();
        return view('treatment',compact('treatments'));
    }
    
    public function tedavikayit(){
        $doctors = Doctor::all();
        $branches=Branch::all();
        return view('treatmentkayit')->with([
            'doctors' => $doctors,
            'branches' => $branches
        ]);
    }

    public function tedavikayitpost(Request $request){
        $name=$request->input('treatment_name');
        $branch=$request->input('treatment_fee');
        $doctor_id=$request->input('doctor_id');
        $branch_id=$request->input('branch_id');

        Treatment::create([
            "treatment_name"=>$name,
            "treatment_fee"=>$branch,
            "doctor_id"=>$doctor_id,
            "branch_id"=>$branch_id,
        ]);
        return redirect()->route('index');
    }
    
    public function edit($id){
        $treatment=Treatment::whereId($id)->first();
        $doctors = Doctor::all();
        return view('treatmentupdate')->with([
            'treatment' => $treatment,
            'doctors' => $doctors
        ]);
    }

    public function tedaviupdate(Request $request,Treatment $treatment){
        $request->validate([
            'branch_name' => 'required',
            'branch_fee' => 'required',
            'doctor_id' => 'required'
        ]);
        $treatment->update([
        'branch_name'=>$request->get('branch_name'),
        'branch_fee'=> $request->get('branch_fee'),
        'doctor_id'=> $request->get('doctor_id'),
    ]);
    return redirect()->route('index');
    }

    public function destroy($id){
        Treatment::where('id',$id)->delete();
        return redirect()->route('index');
    }

}
