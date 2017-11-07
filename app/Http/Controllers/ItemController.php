<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    function index() {
        return view("item.index");
    }

    function all() {
        $items = ["Eenie", "Minnie", "Meenie", "Moe"];
        return response()->json($items);
    }
}
