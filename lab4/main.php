<?php

// Design pattern: Adapter

require_once 'Email.php';
require_once 'Slack.php';
require_once 'Sms.php';

$adminEmail = 'johndoe@example.com';
$adminPhone = '+1230120403';
$adminBusinessName = 'John Doe Corporation';

$emailClient = new EmailNotification($adminEmail);
$emailTitle = "Y'all fired!";
$emailBody = 'jk';
$emailClient->send($emailTitle, $emailBody);

$slackLogin = 'johndoe-corp';
$slackApiKey = '12301kdkd93alkd12k1daczxc';
$slackClient = new SlackClient($slackLogin, $slackApiKey);
$slackAdapter = new SlackNotificationAdapter($slackClient, '#general');
$slackChatId = '#bugs';
$slackAdapter->send($slackChatId, 'Found a bug');

$smsClient = new SmsClient($adminPhone, $adminBusinessName);
$smsAdapter = new SmsNotificationAdapter($smsClient);
$smsText = 'hey';
$smsAdapter->send('+123-1243-12-31', $smsText);
