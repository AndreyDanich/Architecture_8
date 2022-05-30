<?php

$iterator = new DirectoryIterator('./Directories/');
foreach ($iterator as $file) {
    if (!$file->isDot()) {
        echo $file->getFilename() . "<br>\n";
    }
}







// $iterator = new DirectoryIterator(dirname(__FILE__));

// foreach (new DirectoryIterator('./Directories/') as $fileInfo) {
//     if($fileInfo->isDir()) {
//         foreach ($iterator as $file) {
//             if ($file->isDot()) {
//                 echo $file->getFilename() . "<br>\n";
//             }
//         }
//     }
    
//     // echo $fileInfo->getFilename() . "<br>\n";
// }

