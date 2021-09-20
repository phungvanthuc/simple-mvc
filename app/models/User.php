<?php

namespace App\models;
use DB;

class User
{
    public $id;
    public $name;
    public $age;

    public function __construct($id, $name, $age)
    {
      $this->id = $id;
      $this->name = $name;
      $this->age = $age;
    }

    public static function all()
    {
        $list = [];
        $db = DB::getInstance();
        $req = $db->query('SELECT * FROM users');

        foreach ($req->fetchAll() as $item) {
            $list[] = new User($item['id'], $item['name'], $item['age']);
        }

        return $list;
    }
}