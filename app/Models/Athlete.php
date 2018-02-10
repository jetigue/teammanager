<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Athlete extends Model
{
    public function path()
    {
        return '/athletes/' . $this->id;
    }


    public function getStatusAttribute($value)
    {
        if ($value == "a") {
            return "Active";
        }
            
        return "Inactive";
    }

    public function getSexAttribute($value)
    {
        if ($value == "f") {
            return "Female";
        }
            
        return "Male";
    }
}
