<?php

class User {
  private $user;
  private INotifier $notifier;

  function __construct($user, INotifier $notifier) {
    // 1- $this->user = $user;
    // 2- $this->notifier = $notifier;
  }

  public function notifyUser() {
    // 1- $this->notifier->send($this->user);
  }
}
