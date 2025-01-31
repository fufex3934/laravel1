<?php

namespace App\Http\Controllers;

use App\Models\Fufa;
use App\Models\Dojo;
use Illuminate\Http\Request;

class FufaController extends Controller
{
    public function index()
    {
        $fufas = Fufa::with('dojo')->orderBy('created_at', 'desc')->paginate(10);
        return view('fufas.index', ["fufas" => $fufas]);
    }
    public function show($id)
    {
        $fufa = Fufa::with('dojo')->findOrFail($id);
        return view('fufas.show', ["fufa" => $fufa]);
    }

    public function create()
    {
        $dojos = Dojo::all();
        return view('fufas.create', ['dojos' => $dojos]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'skill' => 'required|integer|min:0|max:100',
            'bio' => 'required|string|min:20|max:1000',
            'dojo_id' => 'required|exists:dojos,id',

        ]);
        Fufa::create($validated);
        return redirect()->route('fufas.index')->with('success', 'Fufa created successfully');
    }

    public function destroy($id) {}
}
