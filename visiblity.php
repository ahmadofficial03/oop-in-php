<?php

class FileReader {
    // public $data = "Data in the file";
    protected $data = "Data in the file";

    
}

class CsvFileReader extends FileReader{
    public function getData() {
        return $this->data;
    }

}

$CsvFileReader = new CsvFileReader();
echo $CsvFileReader->getData();