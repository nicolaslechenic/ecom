<?php

class Utilisateur {
  private string $name;
  private string $password;

  public function __construct(string $name, string $password) {
    $this->name = $name;
    $this->password = $password;
  }
} 