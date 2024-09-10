<?php
$admin_theme = [
    "dir" => "default_admin/blue",
    "template" => "admin.php",
];

$themes['admin'] = $admin_theme;


$surecow_theme = [
    "dir" => "surecow/default_home",
    "template" => "surecow.php",
];

$themes['surecow'] = $surecow_theme;

$surecow_admin = [
    "dir" => "surecow/default_admin",
    "template" => "surecow.php",
];

$themes['surecow_admin'] = $surecow_admin;


define('THEMES', $themes);


