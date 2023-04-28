<?php
/*
$FILE_NAME = '';

// Construct the iterator
$it = new RecursiveDirectoryIterator($FILE_NAME);

// Loop through files
foreach(new RecursiveIteratorIterator($it) as $file) {
    if ($file->getExtension() == 'jpg') {
        $newFileName = preg_replace("/\s+|'|,/", '_', $file);
        $newFileName = preg_replace('/[\(|\)]+/', '', $newFileName);  

        rename($file, $newFileName);
        shell_exec('magick '.$newFileName.' -strip -interlace Plane -quality 85% '.$newFileName);

        echo $file;
    }
}
*/

$FILE_NAME = 'compressed2';

// Construct the iterator
$it = new RecursiveDirectoryIterator($FILE_NAME);

// Loop through files
foreach(new RecursiveIteratorIterator($it) as $file) {
    if ($file->getExtension() == 'jpg') {
        if(str_contains( $file, '1400x900')){
            $file = str_replace($FILE_NAME, '', $file);
            echo "'img/properties".$file ."',\r\n";

        }



    }
}