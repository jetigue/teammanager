<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrackMeetName extends Model
{
    public function path()
    {
        return '/track/meet_names/' . $this->id;
    }
}
