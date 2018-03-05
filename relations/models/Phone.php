<?php

namespace App\Models;

class Phone extends \Illuminate\Database\Eloquent\Model {
	function user() {
		return $this->belongsTo('App\Models\User');
	}
}
