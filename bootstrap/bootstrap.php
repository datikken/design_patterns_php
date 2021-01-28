<?php

require_once ('vendor/autoload.php');

use Symfony\Component\Finder\Finder;

$finder = new Finder();
$base_dir = 'src/App/';
$finder->files()->in($base_dir);

if (!$finder->hasResults()) {
    throw new Exception('No files');
}

foreach ($finder as $file) {
    $absoluteFilePath = $file->getRealPath();
    $fileNameWithExtension = $file->getRelativePathname();

    if(str_contains($fileNameWithExtension, 'php')) {
        require_once ($base_dir.$fileNameWithExtension);
    }
}