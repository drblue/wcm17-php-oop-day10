<?php

namespace App\Models;

class Owner extends \Illuminate\Database\Eloquent\Model {
	function cars() {
		return $this->belongsToMany('App\Models\Car');
	}
}
