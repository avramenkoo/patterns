<?php

// Design pattern: Singleton

require_once 'Storage.php';
require_once 'Filesystem.php';

$localDriveStorage = new S3Storage;

$fs = Filesystem::getInstance();

$fs->setStorage($localDriveStorage);

$fs->uploadFile('Document.docx', '$$HOME');
$fs->downloadFile('123e4567-e89b-12d3-a456-426614174000');
