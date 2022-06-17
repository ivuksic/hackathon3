<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function find()
    {
        $my_variable = 'hello';
        return view('search/results', ['my_variable' => $my_variable]);
    }
}
