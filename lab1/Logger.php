<?php

interface ILogger {
  public function log();
}

class Logger implements ILogger {
  function __construct() {}

  public function log($user) {
    // 1- create a timestamp
    // 2- log message with the timestamp and user id
  }
}
