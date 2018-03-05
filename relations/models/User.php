<?php

namespace App\Models;

class User extends \Illuminate\Database\Eloquent\Model {	
	function phone() {
		return $this->hasOne('App\Models\Phone');
	}

	function accounts() {
		return $this->hasMany('App\Models\Account');
	}
}
