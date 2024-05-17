<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\CurricularPlanGraduated;
use App\Models\GraduatedCourse;
use Illuminate\Http\Request;

class CurricularPlanGraduatedController extends Controller
{


    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }



    public function create($id)
    {

        $response['graduatedCourse']=GraduatedCourse::find($id);
        return view('admin.curricularPlanGraduated.create.index',$response);
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
            'title' => 'required|min:3',
            'doc' => 'required|mimes:jpg,png,jpeg,pdf,docx'
        ]);

        $file = $request->file('doc')->store('CurricularPlanGraduated');
        $CurricularPlanGraduated = CurricularPlanGraduated::create([
            'doc' => $file,
            'title' => $request->title,
            'fk_GraduatedCourse_id' => $id,
        ]);
        //Logger
        $this->Logger->log('info', 'Cadastrou um Plano curricular em Licenciaturas com o Ticket ' . $CurricularPlanGraduated->id);

        return redirect("admin/licenciaturas/show")->with('create', '1');
    }



    public function destroy($id)
    {
        //Logger
        $this->Logger->log('info', 'Eliminou um Plano Curricular em Licenciaturas com o identificador ' . $id);
        CurricularPlanGraduated::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }

}
