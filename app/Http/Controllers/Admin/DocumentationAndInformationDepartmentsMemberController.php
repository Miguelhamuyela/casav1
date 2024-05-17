<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\DocumentationAndInformationDepartment;
use App\Models\DocumentationAndInformationDepartmentMember;
use Illuminate\Http\Request;

class DocumentationAndInformationDepartmentsMemberController extends Controller
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

        $response['DocumentationDepartment']=DocumentationAndInformationDepartment::find($id);
        return view('admin.DocumentationDepartmentMember.create.index',$response);
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

        $CurricularPlanDoctorate = DocumentationAndInformationDepartmentMember::create([
            'name' => $request->name,
            'function' => $request->function,
            'fk_documentationMembers_id' => $id,
        ]);
        //Logger
        $this->Logger->log('info', 'Cadastrou um Funcionaro no departamento de Documentação e Informação com o Ticket ' . $CurricularPlanDoctorate->id);

        return redirect("admin/departamento-de-documentacao-e-informacao/show")->with('create', '1');
    }



    public function destroy($id)
    {
        //Logger
        $this->Logger->log('info', 'Eliminou um Funcionaro no departamento de Documentação e Informação com o identificador ' . $id);
        DocumentationAndInformationDepartmentMember::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
