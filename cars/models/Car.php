<?php

namespace App\Models;

class Car extends \Illuminate\Database\Eloquent\Model {
	function owners() {
		return $this->belongsToMany('App\Models\Owner');
	}
}
