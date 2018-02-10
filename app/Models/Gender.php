<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    public function path()
    {
        return '/genders/' . $this->id;
    }
}
