<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LunarDay extends Model
{
    use HasFactory;

    public static function getLunarDayNameById($id) {
        $lunar_day = LunarDay::find($id);
        return $lunar_day->day;
    }
}
