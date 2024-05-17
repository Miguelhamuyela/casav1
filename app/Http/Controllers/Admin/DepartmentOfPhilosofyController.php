<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DepartmentOfPhilosofy;
use Illuminate\Http\Request;

class DepartmentOfPhilosofyController extends Controller
{
    public function show()
    {
        $response['departmentOfPhilosofy'] = DepartmentOfPhilosofy::with("departmentMember")->find(1);
        return view('admin.departmentOfPhilosofy.details.index', $response);
    }

    public function edit($id)

    {
        $response['departmentOfPhilosofy'] = DepartmentOfPhilosofy::find($id);
        return view('admin.departmentOfPhilosofy.edit.index',  $response);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|min:5',
            'image' => 'mimes:png,jpg,jpeg',
            'body' => 'required|min:5'

        ]);

        if ($file = $request->file('image')) {
            $file = $file->store('departmentOfPhilosofy');
        } else {
            $file = DepartmentOfPhilosofy::find($id)->image;
        }


        $AboutRoute =  DepartmentOfPhilosofy::find($id)->update([
            'body' => $request->body,
            'title'=> $request->title,
            'image'=> $file
        ]);

        return redirect("admin/departamento-de-filosofia/show")->with('edit', '1');
    }
}
