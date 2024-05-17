<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AcademicAffairsDepartment;
use Illuminate\Http\Request;

class AcademicAffairsDepartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $response['AcademicDepartment'] = AcademicAffairsDepartment::with("departmentMember")->find(1);
        return view('admin.AcademicDepartment.details.index', $response);
    }

    public function edit($id)

    {
        $response['AcademicDepartment'] = AcademicAffairsDepartment::find($id);
        return view('admin.AcademicDepartment.edit.index',  $response);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|min:5',
            'image' => 'mimes:png,jpg,jpeg',
            'body' => 'required|min:5'

        ]);



        if ($file = $request->file('image')) {
            $file = $file->store('departmentAccademic');
        } else {
            $file = AcademicAffairsDepartment::find($id)->image;
        }


        $AboutRoute = AcademicAffairsDepartment::find($id)->update([
            'body' => $request->body,
            'title'=> $request->title,
            'image'=> $file
        ]);

        return redirect("admin/departamento-de-assuntos-academicos/show")->with('edit', '1');
    }
}
