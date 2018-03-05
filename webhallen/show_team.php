<?php

require("core/init.php");
require("templates/header.php");

use App\Models\Store;
use App\Models\Team;
use App\Models\Participant;

// http://oop.test/day10/webhallen/show_team.php?team_id=2&store_id=4
$store_id = $_GET['store_id'];
$team_id = $_GET['team_id'];

$store = Store::find($store_id);
$team = Team::find($team_id);

$participants = Participant::where('team_id', '=', $team_id)->get();

echo "<h2>{$team->name}</h2>";

echo "<h3>Lagmedlemmar</h3>";
echo "<ol>";
foreach ($participants as $participant) {
	echo "<li>{$participant->name}</li>";
}
echo "</ol>";

echo "<p>Tävlar i butik: {$store->city}, {$store->streetname}</p>";

echo "<a href='show_store.php?id={$store_id}'>Tillbaka</a>";

require("templates/footer.php");
