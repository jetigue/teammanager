<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MeetHost extends Model
{
    public function path()
    {
        return '/meet_hosts/' . $this->id;
    }
}
