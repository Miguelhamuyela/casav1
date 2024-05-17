<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuidelinesController extends Controller
{
    //
    public function index(){

        return view('site.guidelines.index');
    }
}
