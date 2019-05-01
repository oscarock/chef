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
    public function index(Request $request)
    {
        $superheros = Superheros::paginate(9);
        return [
            'pagination' => [
                'total'         => $superheros->total(),
                'current_page'  => $superheros->currentPage(),
                'per_page'      => $superheros->perPage(),
                'last_page'     => $superheros->lastPage(),
                'from'          => $superheros->firstItem(),
                'to'            => $superheros->lastItem(),
            ],
            'superheros' => $superheros
        ];
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
