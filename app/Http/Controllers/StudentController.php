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
    public function store(Request $request)
    {
        // dump and die pour voir le contenu de la variable pour le debogage on peut  utiliser   var_dump
        dd($request->all());
    }

    public function index()
    {
        $personnes = [
            [
                "nom" => "ABALO",
                "prenom" => "justin",
                "age" => "13",
                "sexe" => "Masculin",
            ],
            [
                "nom" => "TANDOH",
                "prenom" => "Awa",
                "age" => "22",
                "sexe" => "Féminin",
            ],
            [
                "nom" => "ZINSOU",
                "prenom" => "Emmanuel",
                "age" => "35",
                "sexe" => "Masculin",
            ],
            [
                "nom" => "YAO",
                "prenom" => "Clémence",
                "age" => "28",
                "sexe" => "Féminin",
            ],
            [
                "nom" => "N'DIAYE",
                "prenom" => "Ali",
                "age" => "19",
                "sexe" => "Masculin",
            ],
            [
                "nom" => "ADJAHO",
                "prenom" => "Sophie",
                "age" => "45",
                "sexe" => "Féminin",
            ],
            [
                "nom" => "KABORE",
                "prenom" => "Ousmane",
                "age" => "50",
                "sexe" => "Masculin",
            ]
        ];
        return view("student.index", compact("personnes"));
    }
}
