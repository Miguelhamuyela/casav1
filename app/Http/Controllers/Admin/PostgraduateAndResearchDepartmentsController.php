<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PostgraduateAndResearchDepartment;
use Illuminate\Http\Request;

class PostgraduateAndResearchDepartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $response['postgraduateDepartment'] = PostgraduateAndResearchDepartment::with("departmentMember")->find(1);
        return view('admin.postgraduateDepartment.details.index', $response);
    }

    public function edit($id)

    {
        $response['postgraduateDepartment'] = PostgraduateAndResearchDepartment::find($id);
        return view('admin.postgraduateDepartment.edit.index',  $response);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|min:5',
            'image' => 'mimes:png,jpg,jpeg',
            'body' => 'required|min:5'

        ]);

        if ($file = $request->file('image')) {
            $file = $file->store('PostGraduted');
        } else {
            $file = PostgraduateAndResearchDepartment::find($id)->image;
        }

        $AboutRoute = PostgraduateAndResearchDepartment::find($id)->update([
            'body' => $request->body,
            'title'=> $request->title,
            'image'=> $file
        ]);

        return redirect("admin/departamento-de-pos-graduacao-e-investigacao/show")->with('edit', '1');
    }
}
