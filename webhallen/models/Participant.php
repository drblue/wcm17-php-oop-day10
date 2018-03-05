<?php

namespace App\Models;

class Participant extends \Illuminate\Database\Eloquent\Model {
	function team() {
		return $this->belongsTo('App\Model\Team');
	}
}
