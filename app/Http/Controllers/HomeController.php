<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class HomeController extends Controller {
  function index() {
    $movies_list = Movie::all();
    dump($movies_list);

    return view('home.index', [
      "movies" => $movies_list
    ]);
  }
}
