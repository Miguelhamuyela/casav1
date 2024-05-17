<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BudgetAndManagementDepartment;
use Illuminate\Http\Request;

class BudgetAndManagementDepartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $response['BudgetDepartment'] = BudgetAndManagementDepartment::with("departmentMember")->find(1);
        return view('admin.BudgetDepartment.details.index', $response);
    }

    public function edit($id)

    {
        $response['BudgetDepartment'] = BudgetAndManagementDepartment::find($id);
        return view('admin.BudgetDepartment.edit.index',  $response);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|min:5',
            'image' => 'mimes:png,jpg,jpeg',
            'body' => 'required|min:5'

        ]);


        if ($file = $request->file('image')) {
            $file = $file->store('BudgetAndMangement');
        } else {
            $file = BudgetAndManagementDepartment::find($id)->image;
        }


        $AboutRoute = BudgetAndManagementDepartment::find($id)->update([
            'body' => $request->body,
            'title'=> $request->title,
            'image'=> $file
        ]);

        return redirect("admin/departamento-de-admnistracao-e-gestao-do-orcamento/show")->with('edit', '1');
    }
}
