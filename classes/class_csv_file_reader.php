<?php

include_once 'class_visibility.php';

class CsvFileReader extends FileReader
{
    public function getData()
    {
        return $this->data;
    }
}

?>