<?php

namespace App\Models;

class Team extends \Illuminate\Database\Eloquent\Model {
	function store() {
		return $this->belongsTo('App\Models\Store');
	}

	function participants() {
		return $this->hasMany('App\Models\Participant');
	}
}
