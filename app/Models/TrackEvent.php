<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrackEvent extends Model
{
    public function path()
    {
        return '/track/events/' . $this->id;
    }
}
