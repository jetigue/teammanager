<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrackIndividualResult extends Model
{
    public function path()
    {
        return '/track/individual_results/' . $this->id;
    }

    public function athlete()
    {
    	return $this->belongsTo(\App\Models\Athlete::class);
    }

    public function trackTeamResult()
    {
    	return $this->belongsTo(\App\Models\TrackTeamResult::class);
    }

    public function trackEvent()
    {
    	return $this->belongsTo(\App\Models\TrackEvent::class);
    }


    public function getDurationAttribute($duration)
    {
        $total_duration = $this->total_seconds;

        if ($total_duration >= 3600) {
            $duration = ltrim(gmdate('g:i:s', $total_duration), 0);
        } else {
            $duration = ltrim(gmdate('i:s', $total_duration), 0);
        }

        return($duration);
    }

    public function getMillisecondsAttribute($milliseconds)
    {

        $milliseconds = sprintf("%02d", $milliseconds);

        return($milliseconds);
    }

    public function getVdotAttribute($vdot)
    {
    	// Constants Used
    	// I have no idea how they are derived
    	$constant1 = .182258;
    	$constant2 = .000104;
    	$constant3 = -4.6;
    	$constant4 = .8;
    	$constant5 = .1894393;
    	$constant6 = -.01278;
    	$constant7 = .29895558;
    	$constant8 = -.193261;

    	// 1. Convert time to total seconds
    	$total_seconds = $this->total_seconds;

    	// 2. Convert total seconds to minutes
    	$minutes = $total_seconds/60;

    	// 3. Find average veleocity (meters/minutes)
    	$distance = $this->trackEvent->distance;

    	$average_velocity = $distance/$minutes;

    	// 4. Multiply the avarage velocity by constant1
    	$a = $average_velocity * $constant1;

    	// 5. Multiply velocity squared by constant2
    	$velocity_squared = $average_velocity**2;

    	$b = $constant2 * $velocity_squared;

    	// 6. Plug minutes into "constant formula"
    	$c = $constant6 * $minutes;

    	$d = $constant4 + $constant5*EXP($c);

    	// 7. 
    	$e = $constant7*EXP($constant8 * $minutes);

    	// 8. Calculate %VO2Max
    	$f = $d + $e;

    	// 9. Calculate vdot
    	$vdot = ($a + $b + $constant3)/$f;

    	return(number_format($vdot, 1));
    }
}
