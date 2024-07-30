<?php

namespace App\Http\Controllers;

use App\Models\LunarDay;
use Illuminate\Http\Request;

class LunarDayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lunar_days = LunarDay::all();
        $lunar_days_data = [];
        foreach ($lunar_days as $lunar_day) {
            $original_description = $lunar_day->description;

            // Удалить HTML-теги
            $plain_text = strip_tags($original_description);

            // Удалить начальные и конечные пробелы
            $trimmed_text = trim($plain_text);
            $short_description = substr($trimmed_text, 0, 21);
            $lunar_days_data[] = [
                'id' => $lunar_day->id,
                'name' => $lunar_day->name,
                'description' => $lunar_day->description,
                'short_description' => $short_description . '...',
                'symbol' => $lunar_day->symbol,
                'stone' => $lunar_day->stone,
                'updated_at' => $lunar_day->updated_at,
            ];
        }
        return view('lunar_day.index', ['lunar_days_data' =>$lunar_days_data]);
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
        $lunar_day = LunarDay::find($id);

        return view('lunar_day.edit', ['lunar_day_data' =>$lunar_day]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
//        dd($request);
        $lunar_day = LunarDay::find($id);

        $lunar_day->stone = $request->stone;
        $lunar_day->symbol = $request->symbol;
        $lunar_day->description = $request->description;
        $lunar_day->save();

        return redirect('/lunar-day/list');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
