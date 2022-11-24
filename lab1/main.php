<?php

require 'Logger.php';
require 'Notifier.php';
require 'User.php';
require 'Task.php';
require 'Project.php';

$notifier = new EmailNotifier();
$logger = new Logger();
$user = new User($userData, $notifier);

$task = new Task('Hello World', $user, $logger);
