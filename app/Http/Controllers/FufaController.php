<?php

namespace App\Http\Controllers;

use App\Models\Fufa;
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
        return view('fufas.create');
    }

    public function store() {}

    public function destroy($id) {}
}
