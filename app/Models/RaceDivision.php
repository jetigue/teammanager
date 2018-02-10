<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RaceDivision extends Model
{
    public function path()
    {
        return '/race_divisions/' . $this->id;
    }
}
