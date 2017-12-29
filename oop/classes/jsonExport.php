<?php
require_once __DIR__.DIRECTORY_SEPARATOR.'../interfaces/canExport.php';

class jsonExport implements canExport{

    public function export()
    {
        echo "data format : json";
    }
}