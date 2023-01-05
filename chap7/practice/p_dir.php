<?php
$dir = new DirectoryIterator('./');
foreach ($dir as $file) {
    if ($file->isFile()) {
        print "{$file->getFileName()} : {$file->getSize()}<br />";
    }
}
