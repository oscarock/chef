<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vote;
use Illuminate\Support\Facades\DB;

class VoteController extends Controller
{
    public function addVote(Request $request){  
      $votes = new Vote;
      $votes->id_hero = $request->input('id');
      $votes->votes = 1;
      $votes->save();
    }

    public function votesSuperheros(){
        $votes = DB::table('votes')
            ->join('superheros', 'superheros.id', '=', 'votes.id_hero')
            ->select('superheros.id as superhero_id','superheros.name','superheros.picture','superheros.publisher', DB::raw('SUM(votes.votes) as total'))
            ->groupBy('superhero_id')
            ->orderBy('total', 'DESC')
            ->take(10)
            ->get();
            
        return $votes;    
    }
}
