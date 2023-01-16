<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\donor;
use  Session;

class donorController extends Controller
{
    public function index(){

        return view('donor');
    }


    public function addDonors(Request $request){

        $donors= new donor();

        $donors->name=$request->name;
        $donors->blood_group=$request->blood_group;
        $donors->last_donated=$request->last_donated;
        $donors->age=$request->age;
        $donors->address=$request->address;
        $donors->contact_number=$request->contact_number;
        $donors->acceptor_id=$request->acceptor_id;
        $donors-> save();
        Session:: flash('msg','Sent Successfully!');
        return redirect('donors');
    }

}
