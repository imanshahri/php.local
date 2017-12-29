<?php
require_once "oop/classes/htmlExport.php";
require_once "oop/classes/xmlExport.php";
require_once "oop/classes/jsonExport.php";

$export = "xml";
$handler = $export.'Export';
$handlerObject = new $handler;

class exportHandler{
    public function doExport(canExport $handler)
    {
        $handler->export();
    }
}

$object = new exportHandler();
$object->doExport($handlerObject);