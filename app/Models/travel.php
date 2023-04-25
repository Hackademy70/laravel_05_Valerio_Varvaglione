<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    protected $fillable = [
        
        'name',
        'state',
        'img',
        'description',
       
    ];
}
