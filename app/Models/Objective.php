<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objective extends Model
{
    use HasFactory;
    private static $objectives;
    public static function newObjective($request)
    {
        self::$objectives = new Objective();
        self::$objectives->O_id      = $request->O_id;
        self::$objectives->details      = $request->details;
        self::$objectives->save();
        return self::$objectives;
    }
}
