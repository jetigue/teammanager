<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TimingMethod extends Model
{
    public function path()
    {
        return '/timing/' . $this->id;
    }
}
