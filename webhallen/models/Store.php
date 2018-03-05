<?php

namespace App\Models;

class Store extends \Illuminate\Database\Eloquent\Model {
	function teams() {
		return $this->hasMany('App\Models\Team');
	}
}
