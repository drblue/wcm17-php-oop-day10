<?php

require("core/init.php");
require("templates/header.php");

use App\Models\User;
use App\Models\Account;

echo "<h2>Användare</h2>";

$users = User::get();

foreach ($users as $user) {
	echo "<h3>{$user->name}</h3>";
	echo "<ol>";
	// $accounts = Account::where('user_id', '=', $user->id)->get();
	foreach ($user->accounts as $account) {
		echo "<li>Konto {$account->accountnumber} har saldo {$account->balance}</li>";
	}
	echo "</ol>";
}

require("templates/footer.php");
