<?php

namespace App\Http\Controllers\Site;

use App\Models\News;
use App\Models\About;
use App\Models\Course;
use App\Models\Partner;
use App\Models\SlideShow;
use App\Http\Controllers\Controller;
use App\Models\Configuration;
use App\Models\DoctorateStatistic;
use App\Models\GraduationStatistic;
use App\Models\MasterStatistic;
use App\Models\SubCourse;

class HomeController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $response['partners'] = Partner::orderBy('id', 'desc')->get();
        $response['slideshows'] = SlideShow::orderBy('id', 'desc')->get();
        $response['news'] = News::where([['state', 'Autorizada']])->orderBy('id', 'desc')->limit(6)->get();
        $response['social'] = Configuration::all();
        $response['graduation'] = GraduationStatistic::find(1);
        $response['master'] = MasterStatistic::find(1);
        $response['doctorated'] = DoctorateStatistic::find(1);

        return view('site.home.index', $response);
    }
}
