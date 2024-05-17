<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\CurricularPlanMaster;
use App\Models\MasterCourse;
use Illuminate\Http\Request;

class CurricularPlanMasterController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }



    public function create($id)
    {

        $response['masterCourse']=MasterCourse::find($id);
        return view('admin.curricularPlanMaster.create.index',$response);
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

        $file = $request->file('doc')->store('CurricularPlanMaster');
        $CurricularPlanMaster = CurricularPlanMaster::create([
            'doc' => $file,
            'title' => $request->title,
            'fk_MasterCourse_id' => $id,
        ]);
        //Logger
        $this->Logger->log('info', 'Cadastrou um Plano curricular em Mestrado com o Ticket ' . $CurricularPlanMaster->id);

        return redirect("admin/mestrado/show")->with('create', '1');
    }



    public function destroy($id)
    {
        //Logger
        $this->Logger->log('info', 'Eliminou um Plano Curricular em Mestrado com o identificador ' . $id);
        CurricularPlanMaster::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
