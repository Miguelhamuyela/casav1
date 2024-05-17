<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\ActionPlanRole;
use Illuminate\Http\Request;

class ActionPlanRolesController extends Controller
{


    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function list()
    {
        $response['actionPlanRoles'] = ActionPlanRole::get();
        //Logger
        $this->Logger->log('info', 'Listou planos de Acção');
        return view('admin.actionPlanRoles.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.actionPlanRoles.create.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'body' => 'required|min:5',
            'title' => 'required|min:5',
            'doc' => 'required|mimes:jpg,png,jpeg,pdf,docx|max:10256'

        ]);
        $file = $request->file('doc')->store('ActionPlan');
        $actionPlanRoles = ActionPlanRole::create([
            'title' => $request->title,
            'doc' => $file,
            'body' => $request->body,
        ]);
        //Logger
        $this->Logger->log('info', 'Cadastrou Plano de Acção com o título ' . $actionPlanRoles->title);

        return redirect("admin/plano_de_accao/show/$actionPlanRoles->id")->with('create', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response['actionPlanRoles'] =  ActionPlanRole::find($id);
        return view('admin.actionPlanRoles.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['actionPlanRoles'] = ActionPlanRole::find($id);
        return view('admin.actionPlanRoles.edit.index', $response);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'body' => 'required|min:5',
            'title' => 'required|min:5',
            'doc' => 'mimes:jpg,png,jpeg,pdf,docx|max:10256'
        ]);



        if ($file = $request->file('doc')) {
            $file = $file->store('ActionPlan');
        } else {
            $file = ActionPlanRole::find($id)->doc;
        }


        ActionPlanRole::find($id)->update([
            'doc' => $file,
            'title' => $request->title,
            'body' => $request->body,
        ]);
        //Logger
        $this->Logger->log('info', 'Editou um plano de acção com o identificador ' . $id);
        return redirect("admin/plano_de_accao/show/$id")->with('edit', '1');
    }


    public function destroy($id)
    {
        //Logger
        $this->Logger->log('info', 'Eliminou um plano de acção com o identificador ' . $id);
        ActionPlanRole::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
