<?php

// Design pattern: Proxy

require_once 'Downloader.php';

$someUrl = 'https://spotify.com/songs/never-gonna-give-you-up.mp3';

$downloader = new SimpleDownloader();
$downloader->download($someUrl);
$downloader->download($someUrl);
$downloader->download($someUrl);

$proxy = new DownloaderWithCaching($someUrl);
$proxy->download($someUrl);
$proxy->download($someUrl);
$proxy->download($someUrl);
