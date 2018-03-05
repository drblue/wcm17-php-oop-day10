<?php

require("core/init.php");
require("templates/header.php");

use App\Models\Car;
use App\Models\Owner;

echo "<h2></h2>";

echo "<h3>Ägare</h3>";
echo "<ol>";
// foreach ($team->participants as $participant) {
// 	echo "<li>{$participant->name}</li>";
// }
echo "</ol>";

require("templates/footer.php");
