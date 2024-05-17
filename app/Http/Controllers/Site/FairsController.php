<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Fairs;
use Illuminate\Http\Request;

class FairsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $response['fairs'] = Fairs::orderBy('id', 'desc')->paginate(8);
        return view('site.fairs.index',$response);
    }

    public function show($title)
    {
        //
        try {
            $response['fairs'] = Fairs::where([['title', urldecode($title)]])->first();
            $response['lasted'] = Fairs::where([['title', '!=', urldecode($title)]])->orderBy('id', 'desc')->limit(5)->get();
            return view('site.fairs.single.index', $response);
        } catch (\Throwable $th) {
            return redirect()->route('site.fairs');
        }
    }
}
