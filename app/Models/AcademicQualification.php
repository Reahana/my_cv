<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicQualification extends Model
{
    use HasFactory;
    private static $academic;
    public static function newAcademic($request)
    {
        self::$academic = new AcademicQualification();
        self::$academic->AQ_id      = $request->AQ_id;
        self::$academic->exam       = $request->exam;
        self::$academic->major      = $request->major;
        self::$academic->institute   = $request->institute;
        self::$academic->result     = $request->result;
        self::$academic->year       = $request->year;
        self::$academic->save();
        return self::$academic;
    }
}
