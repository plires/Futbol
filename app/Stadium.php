<?php

namespace App;
use App\Convocation;

use Illuminate\Database\Eloquent\Model;

class Stadium extends Model
{
    public function convocation()
    {
        return $this->belongsTo(Convocation::class, 'user_id', 'id');
    }
}