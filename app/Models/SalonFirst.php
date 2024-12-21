<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalonFirst extends Model
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
        'interests', 
        'why', 
    ];

    public function events ()
    {
        return $this->belongsToMany(Event::class);
    }

    public function checkifAssignedToEvent(Event $event)
    {
        $numeberOfAssignedEvents = $this->events()
                    ->where('events.id', $event->id)
                    ->count();
        return $numeberOfAssignedEvents > 0 ? true : false; 
    }
}
