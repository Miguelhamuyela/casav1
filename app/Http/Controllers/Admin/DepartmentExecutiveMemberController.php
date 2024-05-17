<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\DepartmentExecutiveSecretariat;
use App\Models\ExecutiveMember;
use Illuminate\Http\Request;

class DepartmentExecutiveMemberController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }



    public function create($id)
    {

        $response['departmentOfExecutive']=DepartmentExecutiveSecretariat::find($id);
        return view('admin.departmentExecutiveMember.create.index',$response);
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
            'subject' => 'required|min:2',
            'category' => 'required|min:2',
            'degree' => 'required|min:2'
        ]);

        $CurricularPlanDoctorate = ExecutiveMember::create([
            'name' => $request->name,
            'subject' => $request->subject,
            'category' => $request->category,
            'degree' => $request->degree,
            'fk_ExecutiveMembers_id' => $id,
        ]);
        //Logger
        $this->Logger->log('info', 'Cadastrou um docente no departamento do Secretariado Executivo e Comunicação Empresarial com o Ticket ' . $CurricularPlanDoctorate->id);

        return redirect("admin/departamento-secretariado-executivo-e-comunicacao-empresarial/show")->with('create', '1');
    }



    public function destroy($id)
    {
        //Logger
        $this->Logger->log('info', 'Eliminou um docente no departamento do Secretariado Executivo e Comunicação Empresarial com o identificador ' . $id);
        ExecutiveMember::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
