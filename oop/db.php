<?php

class Db{
    const HOST = '127.0.0.1';
    public static $table;

    private static $a;

    public static $prefix;

    public function all(){
        $table = static::$table;
        return "SELECT * FROM {$tablea}";
    }

    public function find($id,$columns = null)
    {
        //array('id','name');
        // 'a,b,c,d'
        $columns = !is_null($columns) ? implode(',',$columns) : '*' ;
        return "SELECT {$columns} FROM {$this->table} WHERE id={$id}";
    }

    public function delete($id)
    {
        return "DELETE FROM {$this->table} WHERE id={$id}";
    }

    private function sort(){

    }

    public static function export(){
        self::$prefix;
        static::$prefix;
    }


}

$connection = new Db();
$connection->table = "users";
$connection->find(56,array('id','name'));

Db::export();
new finalClass();
function __autoload($className){

}