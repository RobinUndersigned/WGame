<?php

namespace App\Http\Controllers;

use App\Drink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DrinkController extends Controller
{
    public function index() {
        $drinks = Drink::all();
        dump($drinks);
        return view('post.post_index', ['drinks' => $drinks]);
    }

    public function showOne($id) {
        $drink = is_numeric($id)
            ? Drink::where('id', $id)->get()
            : false
        ;

        return view('post.post', ['drink' => $drink]);
    }
}
