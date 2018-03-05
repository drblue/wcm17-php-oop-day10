<?php

require("core/init.php");
require("templates/header.php");

use App\Models\User;
use App\Models\Phone;

echo "<h2>Användare</h2>";
echo "<ul>";

$phones = Phone::get();

foreach ($phones as $phone) {
	echo "<li>Telefonen {$phone->manufacturer} {$phone->model} ägs av {$phone->user->name}</li>";
}

require("templates/footer.php");
