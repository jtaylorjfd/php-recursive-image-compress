<?php
/*
$FILE_NAME = '';

// Construct the iterator
$it = new RecursiveDirectoryIterator($FILE_NAME);

// Loop through files
foreach(new RecursiveIteratorIterator($it) as $file) {
    if ($file->getExtension() == 'jpg') {
        $newFileName = preg_replace("/\s+|'|,/", '_', $file);

        rename($file, $newFileName);
        shell_exec('magick '.$newFileName.' -strip -interlace Plane -quality 85% '.$newFileName);

        echo $file;
    }
}
*/

