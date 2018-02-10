<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrackMeet extends Model
{
    public function path()
    {
        return '/track/meets/' . $this->id;
    }

    public function trackMeetName()
    {
        return $this->belongsTo(\App\Models\TrackMeetName::class, 'track_meet_name_id');
    }

    public function trackVenue()
    {
        return $this->belongsTo(\App\Models\TrackVenue::class, 'track_venue_id');
    }

    public function meetHost()
    {
        return $this->belongsTo(\App\Models\MeetHost::class, 'meet_host_id');
    }

    public function timingMethod()
    {
        return $this->belongsTo(\App\Models\TimingMethod::class, 'timing_method_id');
    }

    public function season()
    {
        return $this->belongsTo(\App\Models\Season::class, 'season_id');
    }

    public function trackTeamResults()
    {
        return $this->hasMany(\App\Models\TrackTeamResult::class);
    }
}

