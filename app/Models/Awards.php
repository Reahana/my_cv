<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Awards extends Model
{
    use HasFactory;
    private static $awards;
    public static function newAwards($request)
    {
        self::$awards = new Awards();
        self::$awards->A_id      = $request->A_id;
        self::$awards->occasion       = $request->occasion;
        self::$awards->category   = $request->category;
        self::$awards->position     = $request->position;
        self::$awards->date       = $request->date;
        self::$awards->save();
        return self::$awards;
    }
}
