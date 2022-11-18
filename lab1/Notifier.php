<?php

// 3. Спосіб оповіщення єдиний для усіх користувачів. Список способів оповіщення може бути змінено у майбутньому.
interface INotifier {
  public function send();
}

class EmailNotifier implements INotifier {
  function __construct() {}
  
  private function sendEmail() {}

  public function send() {
    // 1- відправити email за доп. методу $this->sendEmail()
  }
}

class SmsNotifier implements INotifier {
  function __construct() {}
  
  private function sendSms() {}

  public function send() {
    // 1- відправити sms за доп. методу $this->sendSms()
  }
}

class MessengerNotifier implements INotifier {
  function __construct() {}
  
  private function sendDm() {}

  public function send() {
    // 1- відправити direct message за доп. методу $this->sendDm()
  }
}
