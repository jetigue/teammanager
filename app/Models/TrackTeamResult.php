<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrackTeamResult extends Model
{
    public function path()
    {
        return '/track/team_results/' . $this->id;
    }

    public function trackMeet()
    {
    	return $this->belongsTo(\App\Models\TrackMeet::class);
    }

    public function gender()
    {
    	return $this->belongsTo(\App\Models\Gender::class);
    }

    public function raceDivision()
    {
    	return $this->belongsTo(\App\Models\RaceDivision::class);
    }
}
