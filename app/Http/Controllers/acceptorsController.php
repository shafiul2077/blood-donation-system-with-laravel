<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\acceptor;
use  Session;

class acceptorsControoler extends Controller
{
    public function index(){

        return view('acceptors');
    }

    public function addAcceptors(Request $request){

        $acceptors= new acceptor();

        $acceptors->name=$request->name;
        $acceptors->blood_group=$request->blood_group;
        $acceptors->age=$request->age;
        $acceptors->address=$request->address;
        $acceptors->contact_number=$request->contact_number;
        $acceptors-> save();
        Session:: flash('msg','Sent Successfully!');
        return redirect('acceptors');
    }


}
