<?php

namespace App\Models;

class Account extends \Illuminate\Database\Eloquent\Model {
	function user() {
		return $this->belongsTo('App\Models\User');
	}
}
