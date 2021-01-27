<?php

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function __construct()
    {
        $capsule = new Capsule;
        $capsule->addConnection([
            "driver"    => "mysql",
            "host"      => "localhost",
            "database"  => "laravel",
            "username"  => "root",
            "password"  => "",
            "charset"   => "utf8",
            "collation" => "utf8_general_ci",
            "prefix"    => ""
        ]);

        $capsule->bootEloquent();
    }
}