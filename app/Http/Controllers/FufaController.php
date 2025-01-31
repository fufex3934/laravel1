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

    public function store() {}

    public function destroy($id) {}
}
