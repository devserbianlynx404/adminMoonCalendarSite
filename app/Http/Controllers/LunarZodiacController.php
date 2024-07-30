<?php

namespace App\Http\Controllers;

use App\Models\Zodiac;
use Illuminate\Http\Request;

class LunarZodiacController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $moon_zodiacs = Zodiac::all();
        $lunar_zodiacs_data = [];
        foreach ($moon_zodiacs as $moon_zodiac) {
            $original_description = $moon_zodiac->description;

            // Удалить HTML-теги
            $plain_text = strip_tags($original_description);

            // Удалить начальные и конечные пробелы
            $trimmed_text = trim($plain_text);
            $short_description = substr($trimmed_text, 0, 21);
            $lunar_zodiacs_data[] = [
                'id' => $moon_zodiac->id,
                'name' => $moon_zodiac->name,
                'description' => $moon_zodiac->description,
                'short_description' => $short_description . '...',
                'title' => $moon_zodiac->title,
                'updated_at' => $moon_zodiac->updated_at,

            ];
        }
        return view('lunar_zodiac.index', ['lunar_zodiacs_data' => $lunar_zodiacs_data]);
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
        $lunar_zodiac = Zodiac::find($id);

        return view('lunar_zodiac.edit', ['lunar_zodiac_data' => $lunar_zodiac]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $lunar_zodiac = Zodiac::find($id);

        $lunar_zodiac->name = $request->name;
        $lunar_zodiac->title = $request->title;
        $lunar_zodiac->description = $request->description;
        $lunar_zodiac->save();

        return redirect('/lunar-zodiac/list');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
