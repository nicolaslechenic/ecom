<?php

require_once("./Admin.php");

$admin = new Admin("Florent", "password123");
$toto = $admin->createClient("Toto");

var_dump($toto);

