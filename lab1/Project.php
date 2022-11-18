<?php

class Project {
  private $owner;
  private array $users;

  function __construct($user) {
    // 1- $this->owner = $user
    // 2- $this->addUser($user, false)
  }

  /*
      5. При додаванні нового користувача до проекту адміністратор проекту(користувач) отримує сповіщення. Для цієї події може бути вказано окремий спосіб зі списку доступних способів.
  */
  public function addUser(User $user, $shouldNotify = true) {
    // 1- додати користувача -- array_push($this->users, $user)
    // 2- відправити сповіщення за доп. методу
    //    if (shouldNotify) { $this->owner->notifyUser(); }
  }
}
