<?php

class Project {
  private $owner;
  private array $users;

  function __construct($user) {
    // 1- $this->owner = $user
    // 2- $this->addUser($user, false)
  }

  public function addUser(User $user, $shouldNotify = true) {
    // 1- додати користувача -- array_push($this->users, $user)
    // 2- відправити сповіщення за доп. методу
    //    if (shouldNotify) { $this->owner->notifyUser(); }
  }
}
