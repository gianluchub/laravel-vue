<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CardController extends Controller
{
    
    public function index() {

        // $cards = config("cards");

        return response()
            ->json($cards);

    }

}
