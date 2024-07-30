<?php

namespace App\Http\Controllers;

use App\Models\LunarDay;
use App\Models\MoonPhase;
use Illuminate\Http\Request;

class LunarPhaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $moon_phases = MoonPhase::all();
        $lunar_phases_data = [];
        foreach ($moon_phases as $moon_phase) {
            $original_description = $moon_phase->description;

            // Удалить HTML-теги
            $plain_text = strip_tags($original_description);

            // Удалить начальные и конечные пробелы
            $trimmed_text = trim($plain_text);
            $utf8_text = mb_convert_encoding($trimmed_text, 'UTF-8', 'auto');
            $short_description = substr($utf8_text, 0, 21);
            $lunar_phases_data[] = [
                'id' => $moon_phase->id,
                'name' => $moon_phase->name,
                'description' => $moon_phase->description,
                'short_description' => $short_description . '...',
                'phase_number' => $moon_phase->phase_number,
                'updated_at' => $moon_phase->updated_at,

            ];
        }
        return view('lunar_phase.index', ['lunar_phases_data' => $lunar_phases_data]);
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
        $lunar_phase = MoonPhase::find($id);

        return view('lunar_phase.edit', ['lunar_phase_data' =>$lunar_phase]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
//        dd($request);
        $lunar_phase = MoonPhase::find($id);

        $lunar_phase->name = $request->name_phase;
        $lunar_phase->phase_number = $request->number_phase;
        $lunar_phase->description = $request->description;
        $lunar_phase->save();

        return redirect('/lunar-phase/list');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}