<?php

$config = parse_ini_file("config.ini");

$servername = $config["servername"];
$username = $config["username"];
$pass = $config["pass"];
$database = $config["database"];

$database = new Database($servername, $username, $pass, $database);

