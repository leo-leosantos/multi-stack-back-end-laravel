<?php

namespace App\Http\Controllers;

use App\Http\Requests\PetRequest;
use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
    /**
     * Retorna lista de pets cadastrados
     */


    public function index()
    {

       return Pet::get();
    }


    public function store(PetRequest $request)
    {

        $dadosdoPet = $request->all();
         return Pet::create($dadosdoPet);
    }
}
