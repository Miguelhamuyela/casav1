<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Congress;
use Illuminate\Http\Request;

class CongressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
        {
            //
            $response['congress'] = Congress::orderBy('id', 'desc')->paginate(8);
            return view('site.congress.index',$response);
        }


    public function show($title)
    {
        //
        try {
            $response['congress'] = Congress::where([['title', urldecode($title)]])->first();
            $response['lasted'] = Congress::where([['title', '!=', urldecode($title)]])->orderBy('id', 'desc')->limit(5)->get();
            return view('site.congress.single.index', $response);
        } catch (\Throwable $th) {
            return redirect()->route('site.congress');
        }
    }




}
