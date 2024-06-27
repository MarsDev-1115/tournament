<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    use HasFactory;
    
    function users() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    
    function tournament_teams() {
        return $this->belongsTo(TournamentsTeams::class);
    }
    
    function country_name() {
        return $this->belongsTo(Countries::class, 'country', 'id');
    }
}
