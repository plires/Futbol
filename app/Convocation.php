<?php

namespace App;
use App\ConfirmedList;
use App\Stage;

use Illuminate\Database\Eloquent\Model;

class Convocation extends Model
{
    public function confirmedList()
    {
        return $this->belongsTo(ConfirmedList::class, 'user_id', 'id');
    }

    public function stage()
    {
        return $this->hasOne(Stage::class, 'stage_id', 'id');
    }
}
