<?php

namespace App\Http\Controllers;

use App\Models\travel;
use Illuminate\Http\Request;

class TravelController extends Controller
{
    public function create(){
       return view('travels.create');
    }


    public function store(Request $request){
        
        $name = $request->input('name');
        $state = $request->input('state');
        $img = $request->input('img');
        $description = $request->input('description');

        $travel = new Travel();
        
        $travel->name = $name;
        $travel->state = $state;
        $travel->img = $img;
        $travel->description = $description;

        $travel->save();

        return redirect()->route('home');

        
    }


    



}
