<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Products extends Model
{
    public static function getAll()
    {
        $data = DB::table('products')->get();
        return $data;
    }

}
