<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\CurricularPlanDoctorate;
use App\Models\DoctorateCourse;
use Illuminate\Http\Request;

class CurricularPlanDoctorated extends Controller
{

    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }



    public function create($id)
    {

        $response['doctorateCourse']=DoctorateCourse::find($id);
        return view('admin.curricularPlanDoctorate.create.index',$response);
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
            'doc' => 'required|mimes:jpg,png,jpeg,pdf,docx|max:10256'
        ]);

        $file = $request->file('doc')->store('CurricularPlanDoctorate');
        $CurricularPlanDoctorate = CurricularPlanDoctorate::create([
            'doc' => $file,
            'title' => $request->title,
            'fk_DoctorateCourse_id' => $id,
        ]);
        //Logger
        $this->Logger->log('info', 'Cadastrou um Plano curricular em Licenciaturas com o Ticket ' . $CurricularPlanDoctorate->id);

        return redirect("admin/doutoramento/show")->with('create', '1');
    }



    public function destroy($id)
    {
        //Logger
        $this->Logger->log('info', 'Eliminou um Plano Curricular em Doutoramento com o identificador ' . $id);
        CurricularPlanDoctorate::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }

}
