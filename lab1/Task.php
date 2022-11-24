<?php

class Task {
  private $description;
  private $isComplete = false;
  private $user;
  private $logger;

  function __construct($description, $user, ILogger $logger) {
    // 1- при створенні нового екземпляру класу, створюється завдання
    // 2- надіслати сповіщення за доп. методу $this->user->notifyUser();
  }

  public function complete() {
    // 1- змінити статус завдання на виконано -- $this->isComplete = true;
    // 2- логувати зміни в завданні -- $this->logger->log($this->user)
  }
}
