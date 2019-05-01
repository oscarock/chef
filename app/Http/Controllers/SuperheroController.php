<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Superheros;

class SuperheroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $superheros = Superheros::get();
        return $superheros;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $superhero = Superheros::findOrFail($id);
        return $superhero;
    }
}
