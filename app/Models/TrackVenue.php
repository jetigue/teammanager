<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrackVenue extends Model
{
    public function path()
    {
        return '/track/venues/' . $this->id;
    }
}
