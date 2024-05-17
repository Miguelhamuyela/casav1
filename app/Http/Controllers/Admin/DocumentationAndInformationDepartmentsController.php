<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DocumentationAndInformationDepartment;
use Illuminate\Http\Request;

class DocumentationAndInformationDepartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $response['DocumentationDepartment'] = DocumentationAndInformationDepartment::with("departmentMember")->find(1);
        return view('admin.DocumentationDepartment.details.index', $response);
    }

    public function edit($id)

    {
        $response['DocumentationDepartment'] = DocumentationAndInformationDepartment::find($id);
        return view('admin.DocumentationDepartment.edit.index',  $response);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|min:5',
            'image' => 'mimes:png,jpg,jpeg',
            'body' => 'required|min:5'

        ]);

        if ($file = $request->file('image')) {
            $file = $file->store('DocumentationAndInformation');
        } else {
            $file = DocumentationAndInformationDepartment::find($id)->image;
        }


        $AboutRoute = DocumentationAndInformationDepartment::find($id)->update([
            'body' => $request->body,
            'title'=> $request->title,
            'image'=> $file
        ]);

        return redirect("admin/departamento-de-documentacao-e-informacao/show")->with('edit', '1');
    }
}
