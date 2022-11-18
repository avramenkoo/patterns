<?php

class Task {
  private $description;
  private $isComplete = false;
  private $user;
  private ILogger $logger;

  /*
      2. Коли для користувача створюється завдання він отримує сповіщення одним з заданих способів (email, sms, messenger)
  */
  function __construct($description, $user, ILogger $logger) {
    // 1- при створенні нового екземпляру класу, створюється завдання
    // 2- надіслати сповіщення за доп. методу $this->user->notifyUser();
  }

  /*
      4. При зміни стану завдання логуются час у який було внесено зміни та користувач який зробив зміни.
  */
  public function complete() {
    // 1- змінити статус завдання на виконано -- $this->isComplete = true;
    // 2- логувати зміни в завданні -- $this->logger->log($this->user)
  }
}
