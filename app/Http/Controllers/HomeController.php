<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    //
    public function Home() {
      $verses = array('john+3:16' , 'josua+1:9', 'matthew+6:33', '1corinthians+13:4' );
      $rand = array_rand($verses);
      $query = $verses[$rand];

      $response = Http::get("https://bible-api.com/$query");
      $data =json_decode($response);
      return view('index', compact('data'));
    }

}
