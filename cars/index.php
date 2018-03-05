<?php

require("core/init.php");
require("templates/header.php");

use App\Models\Car;
use App\Models\Owner;

echo "<h2>Bilar</h2>";

foreach (Car::get() as $car) {
	echo "<h3>{$car->manufacturer} {$car->model} ({$car->licenseplate})</h3>";
	echo "<ul>";
	foreach ($car->owners as $owner) {
		echo "<li>{$owner->name}</li>";
	}
	echo "</ul>";
}

echo "<h2>Ägare</h2>";

foreach (Owner::get() as $owner) {
	echo "<h3>{$owner->name}</h3>";
	echo "<ul>";
	foreach ($owner->cars as $car) {
		echo "<li>{$car->manufacturer} {$car->model} ({$car->licenseplate})</li>";
	}
	echo "</ul>";
}

require("templates/footer.php");
