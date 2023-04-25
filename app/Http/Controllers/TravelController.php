<?php

namespace App\Http\Controllers;



use App\Models\Travel;
use Illuminate\Http\Request;

class TravelController extends Controller
{
    public function create(){
       return view('travels.create');
    }


    public function store(Request $request){

        $img = $request->file('img')->store('public/travels');
        
        Travel::create([

           'name' => $request->input('name'),
           'state' => $request->input('state'),
           'img' => $img,
           'description' => $request->input('description'),

        ]);
      

        return redirect()->route('travel.index')->with('message', 'La tua meta è stata inserita con sucesso!');

        
    }

    public function index(){

        $travels = Travel::orderBy('created_at', 'desc')->get();

        return view('travels.index', compact('travels'));
    }

    public function show($id) {
        
        $travels = Travel::findOrFail($id);

        return view('travels.show', compact('travels'));
    
    }

    public function edit(Travel $travels){
        return view('travels.edit', compact('travels'));
    }


    



}
