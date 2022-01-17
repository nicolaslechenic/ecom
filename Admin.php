<?php
require_once("Utilisateur.php");
require_once("Client.php");

class Admin extends Utilisateur {
  public function __construct(string $name, string $password) {
    parent::__construct($name, $password);
  }

  public function createClient($name) {
    return new Client($name, "toto1234");
  }
} 