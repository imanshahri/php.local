<?php
class Post extends Db{

    public function __construct()
    {
        $this->table = 'posts';
    }
}