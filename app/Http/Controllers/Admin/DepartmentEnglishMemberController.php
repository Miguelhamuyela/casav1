<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\DepartmentEnglishMember;
use App\Models\DepartmentOfEnglish;
use Illuminate\Http\Request;

class DepartmentEnglishMemberController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }



    public function create($id)
    {

        $response['departmentOfEnglish']=DepartmentOfEnglish::find($id);
        return view('admin.departmentEnglishMember.create.index',$response);
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

        $CurricularPlanDoctorate = DepartmentEnglishMember::create([
            'name' => $request->name,
            'subject' => $request->subject,
            'category' => $request->category,
            'degree' => $request->degree,
            'fk_departmentEnglish_id' => $id,
        ]);
        //Logger
        $this->Logger->log('info', 'Cadastrou um docente no departamento de Línguas e Literatura Inglesa com o Ticket ' . $CurricularPlanDoctorate->id);

        return redirect("admin/departamento-de-linguas-e-literatura-inglesa/show")->with('create', '1');
    }



    public function destroy($id)
    {
        //Logger
        $this->Logger->log('info', 'Eliminou um docente no departamento de Línguas e Literatura Inglesa com o identificador ' . $id);
        DepartmentEnglishMember::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
