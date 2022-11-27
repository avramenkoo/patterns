<?php

interface Downloader {
  public function download(string $url): void;
}

class SimpleDownloader implements Downloader {
  public function download(string $url): void {
    // downloading logic
  }
}

class DownloaderWithCaching implements Downloader {
  private $downloader;
  private $cache = [];

  public function __construct(SimpleDownloader $downloader) {
    $this->downloader = $downloader;
  }

  public function download(string $url): void {
    // 1- if the file is not already in cache, put it in cache 
    // 2- return the file from cache
  }
}
