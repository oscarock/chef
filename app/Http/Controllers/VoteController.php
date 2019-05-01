<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vote;

class VoteController extends Controller
{
   public function addVote(Request $request){  
      $votes = new Vote;
      $votes->id_hero = $request->input('id');
      $votes->votes = 1;
      $votes->save();
   }
}
