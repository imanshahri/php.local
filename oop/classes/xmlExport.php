<?php
require_once __DIR__.DIRECTORY_SEPARATOR.'../interfaces/canExport.php';
class xmlExport implements canExport{

    public function export()
    {
        echo "data format : xml";
    }
}