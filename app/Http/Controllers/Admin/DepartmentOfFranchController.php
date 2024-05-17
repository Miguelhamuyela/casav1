<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DepartmentOfFranch;
use Illuminate\Http\Request;

class DepartmentOfFranchController extends Controller
{
    public function show()
    {
        $response['departmentOfFranch'] = DepartmentOfFranch::with("departmentMember")->find(1);
        return view('admin.departmentOfFranch.details.index', $response);
    }

    public function edit($id)

    {
        $response['departmentOfFranch'] = DepartmentOfFranch::find($id);
        return view('admin.departmentOfFranch.edit.index',  $response);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|min:5',
            'image' => 'mimes:png,jpg,jpeg',
            'body' => 'required|min:5'

        ]);

        if ($file = $request->file('image')) {
            $file = $file->store('departmentOfFranch');
        } else {
            $file = DepartmentOfFranch::find($id)->image;
        }


        $AboutRoute =  DepartmentOfFranch::find($id)->update([
            'body' => $request->body,
            'title'=> $request->title,
            'image'=> $file
        ]);

        return redirect("admin/departamento-de-linguas-e-literatura-francesa/show")->with('edit', '1');
    }
}
