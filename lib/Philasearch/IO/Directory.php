<?php

/**
 * Directory.php
 *
 * @author    Thomas Muntaner thomas.muntaner@gmail.com
 * @version   1.0.0
 */

namespace Philasearch\IO;

/**
 * Class Directory
 *
 * This lists files in directory
 *
 * @package Philasearch\IO
 *
 */
class Directory
{
    private $path;

    public function __construct ( $path )
    {
        $this->path = $path;
    }

    /**
     * Returns an array of all the files
     * 
     * @return array
     */
    public function getFiles ()
    {
        $dirty = scandir( $this->path );
        $clean = [];

        foreach ( $dirty as $file )
        {
            if ( $file != '.' and $file != '..' )
            {
                $clean[] = new File( $this, $file );
            }
        }

        return $clean;
    }

    /**
     * Returns the path for the directory
     * 
     * @return string
     */
    public function getPath ()
    {
        return $this->path;
    }
}
