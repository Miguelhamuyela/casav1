<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\ScienceAndTechnology;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScienceAndTechnologyController extends Controller
{

    public function index()
    {
        //
        $response['scienceAndTechnology'] = ScienceAndTechnology::orderBy('id', 'desc')->paginate(9);
        return view('site.scienceAndTechnology.all.index', $response);
    }



    public function show($title)
    {
        //
        try {
            $response['scienceAndTechnology'] = ScienceAndTechnology::where([ ['title', urldecode($title)]])->first();
            $response['lasted'] = ScienceAndTechnology::where([ ['title', '!=', urldecode($title)]])->orderBy('id', 'desc')->limit(5)->get();
            return view('site.scienceAndTechnology.single.index', $response);
        } catch (\Throwable $th) {
            return redirect()->route('site.scienceAndTechnology');
        }
    }
}
