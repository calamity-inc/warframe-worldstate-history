<?php
file_put_contents("worldState.json", json_encode(json_decode(file_get_contents("https://api.warframe.com/cdn/worldState.php"), true), JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
