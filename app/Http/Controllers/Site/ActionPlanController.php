<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\ActionPlan;
use App\Models\ActionPlanRole;
use Illuminate\Http\Request;

class ActionPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

        public function index()
    {
        $response['actionPlan'] = ActionPlan::find(1);
        $response['actionPlanRoles'] = ActionPlanRole::orderBy('id', 'asc')->get();
        return view('site.actionPlan.index',$response);
    }


}
