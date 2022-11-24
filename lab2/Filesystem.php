<?php

class Filesystem {

  // Singleton

  private static $instance;
  private $storage;
  
  private function __construct() {}

  // Cloning and unserialization are not permitted for singletons
  private function __clone() {}
  public function __wakeup() {
    throw new \Exception("Cannot unserialize singleton");
  }

  public static function getInstance() {
    if (!isset(self::$instance)) {
      self::$instance = new static();
    }
    return self::$instance;
  }

  //

  public function setStorage(IStorage $storage): void {
    $this->storage = $storage;
  }

  public function uploadFile(string $filename, string $path): string {
    return $this->storage->uploadFile($filename, $path);
  }

  public function downloadFile(string $fileUuid): string {
    return $this->storage->downloadFile($fileUuid);
  }
}
