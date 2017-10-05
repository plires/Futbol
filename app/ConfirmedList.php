<?php

namespace App;

use App\User;
use App\Convocation;
use Illuminate\Database\Eloquent\Model;

class ConfirmedList extends Model
{
    public function user()
    {
        return $this->hasMany(User::class, 'user_id', 'id');
    }

    public function convocation()
    {
        return $this->hasOne(Convocation::class, 'convocation_id', 'id');
    }
}
