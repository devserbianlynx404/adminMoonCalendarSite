<?php

namespace App\Http\Controllers;

use App\Models\FieldOfActivity;
use App\Models\LunarDayActivityField;
use App\Models\Zodiac;
use Illuminate\Http\Request;

class LunarActivityFieldController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lunar_day_activity_fields = LunarDayActivityField::all();
        $lunar_day_activity_data = [];
        foreach ($lunar_day_activity_fields as $lunar_day_activity_field) {
            $original_description = $lunar_day_activity_field->description;

            // Удалить HTML-теги
            $plain_text = strip_tags($original_description);

            // Удалить начальные и конечные пробелы
            $trimmed_text = trim($plain_text);
            $short_description = substr($trimmed_text, 0, 21);
            $lunar_day_activity_data[] = [
                'id' => $lunar_day_activity_field->id,
                'field_of_activity_id' => $lunar_day_activity_field->field_of_activity_id,
                'influence' => $lunar_day_activity_field->influence,
                'short_description' => $short_description . '...',
                'updated_at' => $lunar_day_activity_field->updated_at,

            ];
        }
        return view('lunar_activity_field.index', ['lunar_day_activity_data' => $lunar_day_activity_data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $lunar_activity_field = LunarDayActivityField::find($id);

        return view('lunar_activity_field.edit', ['lunar_activity_field' => $lunar_activity_field]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'lunar_activity_field_id' => 'required|integer',
            'description' => 'required',
            'influence' => 'required|integer',
        ],
        [
            'lunar_activity_field_id.required' => 'Поле "Имя" обязательно для заполнения',
            'lunar_activity_field_id.integer' => 'Поле "Имя" должно состоять из цифр',
            'description.required' => 'Поле "Описание зодиака" обязательно для заполнения',
            'influence.required' => 'Поле "Действие Луны" обязательно для заполнения',
            'influence.integer' => 'Поле "Действие Луны" должно состоять из цифр',
        ]);

//        $cleaned_desc = strip_tags($request->description, '<b><i><u><strong><em><p><br><ul><ol><li><table><thead><tbody><tfoot><tr><td><th>');

        $pattern = '/<p(.*?)>/i';
        $replacement = '<p class="article__text"$1>';
        $newHtmlContent = preg_replace($pattern, $replacement, $request->description);

        $lunar_activity_field = LunarDayActivityField::find($id);

        $lunar_activity_field->field_of_activity_id = $request->lunar_activity_field_id;
        $lunar_activity_field->description = $newHtmlContent;
        $lunar_activity_field->influence = $request->influence;
        $lunar_activity_field->save();

        return redirect('/lunar-activity-field/list');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
