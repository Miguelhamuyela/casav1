<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\BudgetAndManagementDepartment;
use App\Models\BudgetAndManagementDepartmentMember;
use Illuminate\Http\Request;

class BudgetAndManagementDepartmentsMemberController extends Controller
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

        $response['BudgetDepartment']=BudgetAndManagementDepartment::find($id);
        return view('admin.BudgetDepartmentMember.create.index',$response);
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

        $CurricularPlanDoctorate = BudgetAndManagementDepartmentMember::create([
            'name' => $request->name,
            'function' => $request->function,
            'fk_administrationMembers_id' => $id,
        ]);
        //Logger
        $this->Logger->log('info', 'Cadastrou um Funcionaro no departamento de Administração e Gestão do Orçamento com o Ticket ' . $CurricularPlanDoctorate->id);

        return redirect("admin/departamento-de-admnistracao-e-gestao-do-orcamento/show")->with('create', '1');
    }



    public function destroy($id)
    {
        //Logger
        $this->Logger->log('info', 'Eliminou um Funcionaro no departamento de Administração e Gestão do Orçamento com o identificador ' . $id);
        BudgetAndManagementDepartmentMember::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
