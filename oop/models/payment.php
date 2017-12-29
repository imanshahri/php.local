<?php
namespace models;
class Payment extends Db{
    public function __construct()
    {
        $this->table = 'payments';
    }

    public function get_all_payment_by_user_id($user_id)
    {
        return "SELECT * FROM {$this->table} WHERE payment_user_id={$user_id}";
    }
}
