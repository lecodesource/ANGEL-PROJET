<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function create()
    {
        // fonction qui affiche la vue formulaire
        return view("student.create");
    }
    //  fonction  qui va stocker le student dans la base de données
    public function store(Request $request) {
        dd($request->all());
    }
}
