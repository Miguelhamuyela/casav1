<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DepartmentOfPortuguese;
use Illuminate\Http\Request;

class DepartmentOfPortugueseController extends Controller
{
    public function show()
    {
        $response['departmentOfPortuguese'] = DepartmentOfPortuguese::with("departmentMember")->find(1);
        return view('admin.departmentOfPortuguese.details.index', $response);
    }

    public function edit($id)

    {
        $response['departmentOfPortuguese'] = DepartmentOfPortuguese::find($id);
        return view('admin.departmentOfPortuguese.edit.index',  $response);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|min:5',
            'image' => 'mimes:png,jpg,jpeg',
            'body' => 'required|min:5'

        ]);

        if ($file = $request->file('image')) {
            $file = $file->store('departmentOfPortuguese');
        } else {
            $file = DepartmentOfPortuguese::find($id)->image;
        }


        $AboutRoute =  DepartmentOfPortuguese::find($id)->update([
            'body' => $request->body,
            'title'=> $request->title,
            'image'=> $file
        ]);

        return redirect("admin/departamento-de-linguas-e-literatura-portuguesa/show")->with('edit', '1');
    }
}
