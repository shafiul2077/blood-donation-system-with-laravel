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
        $acceptors->name=$acceptors->name;
        $acceptors->blood_group=$acceptors->blood_group;
        $acceptors->age=$acceptors->age;
        $acceptors->address=$acceptors->address;
        $acceptors->contact_number=$acceptors->contact_number;
        $acceptors-> save();
        Session:: flash('msg','Sent Successfully!');
        return redirect('contact');
    }

}
