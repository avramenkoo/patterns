<?php

abstract class SocialNetworkCreator {

  abstract public function create(): ISocialNetwork;

}

class FacebookCreator extends SocialNetworkCreator {
  
  function create(string $login, string $password): ISocialNetwork {
    return new Facebook($login, $password);
  }

}

class LinkedInCreator extends SocialNetworkCreator {
  
  function create(string $email, string $password): ISocialNetwork {
    return new LinkedIn($email, $password);
  }
}
