<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournaments extends Model
{
    use HasFactory;
    
    function organiser() {
        return $this->belongsTo(Organisers::class);
    }
    
    function tournament_teams() {
        return $this->hasMany(TournamentsTeams::class, 'tournament_id', 'id');
    }
    
    function country_name() {
        return $this->belongsTo(Countries::class, 'country', 'id');
    }
}
