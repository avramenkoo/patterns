<?php

require_once 'SocialNetwork.php'
require_once 'SocialNetworkCreator.php'

$facebook = (new FacebookCreator)->create('mark', 'zUck3rbeRg!');
$facebook->publishPost('Should I sell Facebook to Elon Musk?');
$facebook->deletePost('2384023040103');

$linkedin = (new LinkedInCreator)->create('mark@facebook.com', 'p@ssw0rd!');
$linkedin->publishPost("Hey everyone, I'm selling all my META stock, who's interested?");
