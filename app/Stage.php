<?php

namespace App;
use App\Convocation;

use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
	public function convocation()
	{
		return $this->belongsTo(Convocation::class, 'stage_id', 'id');
	}
}