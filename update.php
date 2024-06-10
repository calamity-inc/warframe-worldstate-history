<?php
file_put_contents("worldState.json", json_encode(json_decode(file_get_contents("https://content.warframe.com/dynamic/worldState.php"), true), JSON_PRETTY_PRINT));
