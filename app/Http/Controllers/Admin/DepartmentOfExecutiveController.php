<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DepartmentExecutiveSecretariat;
use Illuminate\Http\Request;

class DepartmentOfExecutiveController extends Controller
{
    public function show()
    {
        $response['departmentOfExecutive'] = DepartmentExecutiveSecretariat::with("departmentMember")->find(1);
        return view('admin.departmentOfExecutive.details.index', $response);
    }

    public function edit($id)

    {
        $response['departmentOfExecutive'] = DepartmentExecutiveSecretariat::find($id);
        return view('admin.departmentOfExecutive.edit.index',  $response);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|min:5',
            'image' => 'mimes:png,jpg,jpeg',
            'body' => 'required|min:5'

        ]);

        if ($file = $request->file('image')) {
            $file = $file->store('departmentOfExecutive');
        } else {
            $file = DepartmentExecutiveSecretariat::find($id)->image;
        }


        $AboutRoute =  DepartmentExecutiveSecretariat::find($id)->update([
            'body' => $request->body,
            'title'=> $request->title,
            'image'=> $file
        ]);

        return redirect("admin/departamento-secretariado-executivo-e-comunicacao-empresarial/show")->with('edit', '1');
    }
}
