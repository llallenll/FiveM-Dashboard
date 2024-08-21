<?php

include '../config/config.php';

$discord_url = $var_discord_url;
header("Location: $discord_url");
exit();

?>