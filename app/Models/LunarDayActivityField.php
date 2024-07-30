<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LunarDayActivityField extends Model
{
    use HasFactory;

    public static function getActivityNameById($id) {
        $activity_field = FieldOfActivity::find($id);
        return $activity_field->name;
    }

    public static function getNameOfInfluenceById($id) {
        if ($id == 1) {
            return 'Ужасно';
        }
        else if ($id == 2) {
            return 'Плохо';
        }
        else if ($id == 3) {
            return 'Норма';
        }
        else if ($id == 4) {
            return 'Хорошо';
        }
        else if ($id == 5) {
            return 'Отлично';
        }
    }
}
