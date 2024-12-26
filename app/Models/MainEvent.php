<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainEvent extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_name', 
        'email', 
        'phone_number', 
        'country', 
        'city',
        'birthday', 
        'education', 
        'work', 
        'industry', 
        'selected_options', 
        'why', 
    ];
}
