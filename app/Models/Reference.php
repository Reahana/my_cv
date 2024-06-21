<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    use HasFactory;
    private static $reference;
    public static function newReference($request)
    {
        self::$reference = new Reference();
        self::$reference->R_id      = $request->R_id;
        self::$reference->name       = $request->name;
        self::$reference->post   = $request->post;
        self::$reference->company     = $request->company;
        self::$reference->mobile       = $request->mobile;
        self::$reference->save();
        return self::$reference;
    }
}
