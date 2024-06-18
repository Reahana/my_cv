<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmploymentHistory extends Model
{
    use HasFactory;
    private static $employment;
    public static function newEmployment($request)
    {
        self::$employment = new EmploymentHistory();
        self::$employment->EH_id       = $request->EH_id;
        self::$employment->position       = $request->position;
        self::$employment->organization      = $request->organization;
        self::$employment->department   = $request->department;
        self::$employment->responsibilities     = $request->responsibilities;
        self::$employment->starting = $request->starting;
        self::$employment->ending      = $request->ending;
        self::$employment->save();
        return self::$employment;
    }
}
