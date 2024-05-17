<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\AcademicAffairsDepartment;
use App\Models\AcademicAffairsDepartmentMember;
use Illuminate\Http\Request;

class AcademicAffairsDepartmentsMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }



    public function create($id)
    {

        $response['AcademicDepartment']=AcademicAffairsDepartment::find($id);
        return view('admin.AcademicDepartmentMember.create.index',$response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $validation = $request->validate([
            'name' => 'required|min:2',
            'function' => 'required|min:2'
        ]);

        $CurricularPlanDoctorate = AcademicAffairsDepartmentMember::create([
            'name' => $request->name,
            'function' => $request->function,
            'fk_academicAffairsMembers_id' => $id,
        ]);
        //Logger
        $this->Logger->log('info', 'Cadastrou um Funcionaro no departamento de Assuntos Academicos com o Ticket ' . $CurricularPlanDoctorate->id);

        return redirect("admin/departamento-de-assuntos-academicos/show")->with('create', '1');
    }



    public function destroy($id)
    {
        //Logger
        $this->Logger->log('info', 'Eliminou um Funcionaro no departamento de Assuntos Academicos com o identificador ' . $id);
        AcademicAffairsDepartmentMember::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
