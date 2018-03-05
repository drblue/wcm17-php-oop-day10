<?php

require("core/init.php");
require("templates/header.php");

use App\Models\Store;
use App\Models\Team;

$store_id = $_GET['id'];
// $store = Store::where('id', '=', $store_id)->first();
$store = Store::find($store_id); // samma sak som ovan men enklare/mindre kod

echo "<h2>{$store->city}, {$store->streetname}</h2>";

echo "<h3>Teams anmälda till butiken</h3>";
echo "<ol>";

$teams = Team::where('store_id', '=', $store_id)->get();
foreach ($teams as $team) {
	echo "<li><a href='show_team.php?team_id={$team->id}&store_id={$store_id}'>{$team->name}</a></li>";
}

echo "</ol>";

echo "<a href='index.php'>Tillbaka</a>";

require("templates/footer.php");
