[![Latest Stable Version](https://poser.pugx.org/philasearch/io/version.svg)](https://packagist.org/packages/philasearch/io)
[![Total Downloads](https://poser.pugx.org/philasearch/io/downloads.svg)](https://packagist.org/packages/philasearch/io)
[![Build Status](https://travis-ci.org/philasearch/php-io.svg?branch=master)](https://travis-ci.org/philasearch/php-io)

# PHP IO

PHP IO is a small library built to work with directories and folders.

## Usage

```php
<?php

use Philasearch\IO\Directory as Directory;
use Philasearch\IO\File      as File;

$dir = new Directory( '/path/to/directory' );

$files = $dir->getFiles(); // returns an array of files

foreach ( $files as $file )
{
    $file->readFile();  // returns the file contents as a string
    $file->getPath();   // returns the file path
    $file->getName();   // returns the file name
}
