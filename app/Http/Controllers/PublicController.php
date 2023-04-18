<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function showHomePage(){
    
        return view('welcome');
       }
       
}
