<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VolunteerExperiences extends Model
{
    use HasFactory;
    private static $volunteer;
    public static function newVolunteer($request)
    {
        self::$volunteer = new VolunteerExperiences();
        self::$volunteer->VE_id      = $request->VE_id;
        self::$volunteer->organization       = $request->organization;
        self::$volunteer->position      = $request->position;
        self::$volunteer->starts   = $request->starts;
        self::$volunteer->ends     = $request->ends;
        self::$volunteer->duration       = $request->duration;
        self::$volunteer->save();
        return self::$volunteer;
    }
}
