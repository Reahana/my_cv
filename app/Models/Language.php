<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;
    private static $language;
    public static function newLanguage($request)
    {
        self::$language = new Language();
        self::$language->L_id      = $request->L_id;
        self::$language->name       = $request->name;
        self::$language->skill   = $request->skill;
        self::$language->save();
        return self::$language;
    }
}
