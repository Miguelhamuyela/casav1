<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LibraryDepartment;
use Illuminate\Http\Request;

class LibraryDepartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $response['LibraryDepartment'] = LibraryDepartment::with("departmentMember")->find(1);
        return view('admin.LibraryDepartment.details.index', $response);
    }

    public function edit($id)

    {
        $response['LibraryDepartment'] = LibraryDepartment::find($id);
        return view('admin.LibraryDepartment.edit.index',  $response);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|min:5',
            'image' => 'mimes:png,jpg,jpeg',
            'body' => 'required|min:5'

        ]);

        if ($file = $request->file('image')) {
            $file = $file->store('LibraryDepartment');
        } else {
            $file = LibraryDepartment::find($id)->image;
        }

        $AboutRoute = LibraryDepartment::find($id)->update([
            'body' => $request->body,
            'title'=> $request->title,
            'image'=> $file
        ]);

        return redirect("admin/departamento-da-biblioteca/show")->with('edit', '1');
    }
}
