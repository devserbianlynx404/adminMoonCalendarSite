<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Zodiac;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Author::all();
        $author_data = [];
        foreach ($authors as $author) {
            $original_description = $author->description;

            // Удалить HTML-теги
            $plain_text = strip_tags($original_description);

            // Удалить начальные и конечные пробелы
            $trimmed_text = trim($plain_text);
            $short_description = substr($trimmed_text, 0, 21);
            $author_data[] = [
                'id' => $author->id,
                'name' => $author->name,
                'updated_at' => $author->updated_at,

            ];
        }
        return view('author.index', ['author_data' => $author_data]);
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
        $author = Author::find($id);

        return view('author.edit', ['author' => $author]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|alpha',
        ],
        [
            'name.required' => 'Поле "Имя" обязательно для заполнения',
            'name.alpha' => 'Поле "Имя" должно состоять из букв',
        ]);

        $cleanedName = strip_tags($request->name, '<b><i><u><strong><em><p><br><ul><ol><li><table><thead><tbody><tfoot><tr><td><th>');


        $lunar_zodiac = Author::find($id);

        $lunar_zodiac->name = $cleanedName;
        $lunar_zodiac->save();

        return redirect('/author/list');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
