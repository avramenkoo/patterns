<?php

// У рамках виконання лабораторної роботи не потрібно описувати деталі реалізації самих методів! Достатньо вказати сам метод та параметри який він приймає та повертає.

require 'Logger.php';
require 'Notifier.php';
require 'User.php';
require 'Task.php';
require 'Project.php';

$notifier = new EmailNotifier();
$logger = new Logger();
$user = new User($userData, $notifier);

$task = new Task('Hello World', $user, $logger);

