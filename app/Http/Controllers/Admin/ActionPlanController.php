<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ActionPlan;
use Illuminate\Http\Request;

class ActionPlanController extends Controller
{

    public function show()
    {
        $response['actionPlan'] = ActionPlan::find(1);
        return view('admin.actionPlan.details.index', $response);
    }

    public function edit($id)

    {
        $response['actionPlan'] = ActionPlan::find($id);
        return view('admin.actionPlan.edit.index',  $response);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|min:5',
            'body' => 'required|min:5'

        ]);
        $AboutRoute =  ActionPlan::find($id)->update([
            'body' => $request->body,
            'title'=> $request->title
        ]);

        return redirect("admin/plano-de-accao/show")->with('edit', '1');
    }


}
