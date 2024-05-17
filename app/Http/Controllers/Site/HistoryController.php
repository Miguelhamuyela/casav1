<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{

    public function index()
    {
        $response['history'] = History::find(1);
        return view('site.history.index',$response);
    }

}
