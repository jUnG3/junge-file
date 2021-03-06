<?php

namespace File;


class File extends \SplFileObject
{
    /**
     * @var \SplFileObject
     */
    private $file;

    /**
     * File constructor.
     * @param $file_name
     * @param $open_mode
     * @param $use_include_path
     * @param $context
     */
    public function __construct($file_name, $open_mode, $use_include_path, $context)
    {
         $this->file = parent::__construct($file_name, $open_mode, $use_include_path, $context);
    }

    /**
     * Sets the private file member
     * @param \SplFileObject $file
     */
    private function setFile(\SplFileObject $file)
    {
        $this->file = $file;
    }

    /**
     * @return \SplFileObject
     */
    public function getFile()
    {
        return $this->file;
    }
}