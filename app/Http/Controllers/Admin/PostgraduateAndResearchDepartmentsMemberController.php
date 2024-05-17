<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\PostgraduateAndResearchDepartment;
use App\Models\PostgraduateAndResearchDepartmentMember;
use Illuminate\Http\Request;

class PostgraduateAndResearchDepartmentsMemberController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    public function create($id)
    {

        $response['postgraduateDepartment']=PostgraduateAndResearchDepartment::find($id);
        return view('admin.postgraduateDepartmentMember.create.index',$response);
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

        $CurricularPlanDoctorate = PostgraduateAndResearchDepartmentMember::create([
            'name' => $request->name,
            'function' => $request->function,
            'fk_postgraduateMembers_id' => $id,
        ]);
        //Logger
        $this->Logger->log('info', 'Cadastrou um Funcionaro no departamento de Pós Graduação e Investigação com o Ticket ' . $CurricularPlanDoctorate->id);

        return redirect("admin/departamento-de-pos-graduacao-e-investigacao/show")->with('create', '1');
    }



    public function destroy($id)
    {
        //Logger
        $this->Logger->log('info', 'Eliminou um Funcionaro no departamento da Pós Graduação e Investigação com o identificador ' . $id);
        PostgraduateAndResearchDepartmentMember::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
