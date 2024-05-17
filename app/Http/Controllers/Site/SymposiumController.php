<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Symposium;
use Illuminate\Http\Request;

class SymposiumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $response['symposium'] = Symposium::orderBy('id', 'desc')->paginate(9);
        return view('site.symposium.index',$response);
    }

    public function show($title)
    {
        //
        try {
            $response['symposium'] = Symposium::where([['title', urldecode($title)]])->first();
            $response['lasted'] = Symposium::where([['title', '!=', urldecode($title)]])->orderBy('id', 'desc')->limit(5)->get();
            return view('site.symposium.single.index', $response);
        } catch (\Throwable $th) {
            return redirect()->route('site.symposium');
        }
    }
}
