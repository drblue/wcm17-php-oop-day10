<?php

require("core/init.php");
require("templates/header.php");

use App\Models\Store;

$stores = Store::orderBy('city')->orderBy('streetname')->get();

echo "<h2>Butiker</h2>";
echo "<ul>";

foreach ($stores as $store) {
	echo "<li><a href='show_store.php?id={$store->id}'>{$store->city}, {$store->streetname}</a></li>";
}
echo "</ul>";


require("templates/footer.php");
