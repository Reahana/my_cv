<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingSummary extends Model
{
    use HasFactory;
    private static $training;
    public static function newTraining($request)
    {
        self::$training = new TrainingSummary();
        self::$training->TS_id      = $request->TS_id;
        self::$training->topic       = $request->topic;
        self::$training->institute   = $request->institute;
        self::$training->duration     = $request->duration;
        self::$training->year       = $request->year;
        self::$training->save();
        return self::$training;
    }
}
