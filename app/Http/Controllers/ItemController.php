<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    function index() {
        return view("item.index");
    }

    function all() {
        $items = [
            [ "name" => "Eenie" ],
            [ "name" => "Minnie" ],
            [ "name" => "Meenie" ],
            [ "name" => "Moe" ]
        ];

        return response()->json($items);
    }
}
