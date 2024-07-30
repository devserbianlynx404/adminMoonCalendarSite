<?php

namespace App\Http\Controllers;

use App\Models\LunarDayInterpretation;
use App\Models\Zodiac;
use Illuminate\Http\Request;

class LunarDayInterpretationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $moon_day_interpretations = LunarDayInterpretation::all();
        $lunar_day_interpretation_data = [];
        foreach ($moon_day_interpretations as $moon_interpretations) {
            $original_description = $moon_interpretations->description;

            // Удалить HTML-теги
            $plain_text = strip_tags($original_description);

            // Удалить начальные и конечные пробелы
            $trimmed_text = trim($plain_text);
            $short_description = substr($trimmed_text, 0, 21);
            $lunar_day_interpretation_data[] = [
                'id' => $moon_interpretations->id,
                'lunar_day_id' => $moon_interpretations->lunar_day_id,
                'author_id' => $moon_interpretations->author_id,
                'short_description' => $short_description . '...',
                'updated_at' => $moon_interpretations->updated_at,

            ];
        }
        return view('lunar_day_interpretation.index', ['lunar_day_interpretation_data' => $lunar_day_interpretation_data]);
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
        $lunar_day_interpretation = LunarDayInterpretation::find($id);

        return view('lunar_day_interpretation.edit', ['lunar_day_interpretation' => $lunar_day_interpretation]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $lunar_zodiac = LunarDayInterpretation::find($id);

        $lunar_zodiac->lunar_day_id = $request->lunar_day_id;
        $lunar_zodiac->author_id = $request->author_id;
        $lunar_zodiac->description = $request->description;
        $lunar_zodiac->save();

        return redirect('/lunar-day-interpretation/list');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
