<?php

namespace App\Http\Controllers;

use App\Models\Fufa;
use Illuminate\Http\Request;

class FufaController extends Controller
{
    public function index()
    {
        $fufas = Fufa::orderBy('created_at', 'desc')->get();
        return view('fufas.index', ["fufas" => $fufas]);
    }
    public function show($id)
    {
        $fufa = Fufa::findOrFail($id);
        return view('fufas.show', ["fufa" => $fufa]);
    }

    public function create()
    {
        return view('fufas.create');
    }

    public function store() {}

    public function destroy($id) {}
}
