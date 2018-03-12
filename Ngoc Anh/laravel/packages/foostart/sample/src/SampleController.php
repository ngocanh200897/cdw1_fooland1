<?php

namespace Foostart\Sample;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class SampleController extends Controller
{
    public function index()
    {
    	// $time = ($timezone)
     //        ? Carbon::now(str_replace('-', '/', $timezone))
     //        : Carbon::now();
    
    	return view('sample::index', ['data'=> "laravel 5.4"]);

    }
}
