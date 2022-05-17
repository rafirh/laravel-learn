<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin
{
    private static $admin = [
        "name" => "Muhammad Rafi Rahman Habibi",
        "email" => "rafirahamnn18@gmail.com",
        "photo" => "photo.jpg"
    ];
    public static function all(){
        return collect(self::$admin);
    }
}
