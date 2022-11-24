<?php

interface ISocialNetwork {
  public function publishPost(string $text);
  public function deletePost(string $postId);
}

class Facebook implements ISocialNetwork {
  
  private $login;
  private $password;

  function __construct(string $login, string $password) {
    $this->login = $login;
    $this->password = $password;
  }

  public function publishPost(string $text) {
    // publish a post via Facebook API
  }

  public function deletePost(string $postId) {
    // delete a post via Facebook API
  }
}

class LinkedIn implements ISocialNetwork {
  
  private $email;
  private $password;

  function __construct(string $email, string $password) {
    $this->email = $email;
    $this->password = $password;
  }

  public function publishPost(string $text) {
    // publish a post via LinkedIn API
  }

  public function deletePost(string $postId) {
    // delete a post via LinkedIn API
  }
}
