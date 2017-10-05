<?php

namespace App;
use App\ConfirmedList;
use App\Stadium;

use Illuminate\Database\Eloquent\Model;

class Convocation extends Model
{
    public function confirmedList()
    {
        return $this->belongsTo(ConfirmedList::class, 'user_id', 'id');
    }

    public function stadium()
    {
        return $this->hasOne(Stadium::class, 'stadium_id', 'id');
    }
}
