<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    public function path()
    {
        return '/seasons/' . $this->id;
    }
}
