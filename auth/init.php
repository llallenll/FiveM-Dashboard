<?php
session_start();

$logged_in = isset($_SESSION['logged_in']) && $_SESSION['logged_in'];

if ($logged_in) {
    if (isset($_SESSION['userData'])) {
        extract($_SESSION['userData']);
        $avatar_url = "https://cdn.discordapp.com/avatars/$discord_id/$avatar.jpg";
    }
} else {
    $avatar_url = '';
    $name = '';
}
?>