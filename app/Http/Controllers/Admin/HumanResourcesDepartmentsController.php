<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HumanResourcesDepartment;
use Illuminate\Http\Request;

class HumanResourcesDepartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $response['HumanResourcesDepartment'] = HumanResourcesDepartment::with("departmentMember")->find(1);
        return view('admin.HumanResourcesDepartment.details.index', $response);
    }

    public function edit($id)

    {
        $response['HumanResourcesDepartment'] = HumanResourcesDepartment::find($id);
        return view('admin.HumanResourcesDepartment.edit.index',  $response);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|min:5',
            'image' => 'mimes:png,jpg,jpeg',
            'body' => 'required|min:5'

        ]);

        if ($file = $request->file('image')) {
            $file = $file->store('HumanResources');
        } else {
            $file = HumanResourcesDepartment::find($id)->image;
        }

        $AboutRoute = HumanResourcesDepartment::find($id)->update([
            'body' => $request->body,
            'title'=> $request->title,
            'image'=> $file
        ]);

        return redirect("admin/departamento-de-recursos-humanos/show")->with('edit', '1');
    }
}
