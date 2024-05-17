<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DepartmentOfEnglish;
use Illuminate\Http\Request;

class DepartmentOfEnglishController extends Controller
{
    public function show()
    {
        $response['departmentOfEnglish'] = DepartmentOfEnglish::with("departmentMember")->find(1);
        return view('admin.departmentOfEnglish.details.index', $response);
    }

    public function edit($id)

    {
        $response['departmentOfEnglish'] = DepartmentOfEnglish::find($id);
        return view('admin.departmentOfEnglish.edit.index',  $response);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|min:5',
            'image' => 'mimes:png,jpg,jpeg',
            'body' => 'required|min:5'

        ]);

        if ($file = $request->file('image')) {
            $file = $file->store('departmentOfEnglish');
        } else {
            $file = DepartmentOfEnglish::find($id)->image;
        }


        $AboutRoute =  DepartmentOfEnglish::find($id)->update([
            'body' => $request->body,
            'title'=> $request->title,
            'image'=> $file
        ]);

        return redirect("admin/departamento-de-linguas-e-literatura-inglesa/show")->with('edit', '1');
    }
}
