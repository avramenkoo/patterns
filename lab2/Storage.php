<?php

interface IStorage {
  public function uploadFile();
  public function downloadFile();
}

class LocalDriveStorage implements IStorage {

  public function uploadFile(string $filename, string $path): string {
    // if a file is successfully uploaded, return the file UUID
  }

  public function downloadFile(string $fileUuid): string {
    // if a file is found, return a direct file download link
  }
}

class S3Storage implements IStorage {

  public function uploadFile(string $filename, string $path): string {
    // if a file is successfully uploaded, return the file UUID
  }

  public function downloadFile(string $fileUuid): string {
    // if a file is found, return a direct file download link
  }
}
