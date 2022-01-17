<?php

class Client extends Utilisateur {
  public function __construct(string $name, string $password) {
    parent::__construct($name, $password);
  }
} 