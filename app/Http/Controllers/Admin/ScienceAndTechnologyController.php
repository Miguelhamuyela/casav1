<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\ScienceAndTechnology;
use Illuminate\Http\Request;

class ScienceAndTechnologyController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    public function list()
    {

        $response['scienceAndTechnology'] = ScienceAndTechnology::get();
        //Logger
        $this->Logger->log('info', 'Listou as Ciências e Tecnologias');
        return view('admin.scienceAndTechnology.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Logger
        $this->Logger->log('info', 'Entrou em Cadastrar Ciência e Tecnologia');
        return view('admin.scienceAndTechnology.create.index');
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
            'title' => 'required|min:5|max:255',
            'body' => 'required|min:5',
            'image' => 'required|mimes:jpg,png,jpeg',
            'date' => 'required',

        ]);
        $file = $request->file('image')->store('scienceAndTechnology');
        $scienceAndTechnology = ScienceAndTechnology::create([
            'path' => $file,
            'title' => $request->title,
            'body' => $request->body,
            'date' => $request->date
        ]);
        //Logger
        $this->Logger->log('info', 'Cadastrou em Ciência e Tecnologia um Artigo com o titulo ' . $scienceAndTechnology->title);

        return redirect("admin/ciencia-e-tecnologia/show/$scienceAndTechnology->id")->with('create', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $response['scienceAndTechnology'] = ScienceAndTechnology::find($id);

        //Logger
        $this->Logger->log('info', 'Visualizar um artigo em Ciência e Tecnologia com o identificador ' . $id);
        return view('admin.scienceAndTechnology.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $response['scienceAndTechnology'] = ScienceAndTechnology::find($id);
        //Logger
        $this->Logger->log('info', 'Entrou em editar um artigo em Ciência e Tecnologia com o identificador ' . $id);
        return view('admin.scienceAndTechnology.edit.index', $response);
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
            'title' => 'required|min:5|max:255',
            'body' => 'required|min:5',
            'date' => 'required',
            'image' => 'mimes:jpg,png,jpeg',
        ]);

        if ($file = $request->file('image')) {
            $file = $file->store('ScienceAndTechnology');
        } else {
            $file = ScienceAndTechnology::find($id)->path;
        }
        ScienceAndTechnology::find($id)->update([
            'path' => $file,
            'title' => $request->title,
            'body' => $request->body,
            'date' => $request->date
        ]);
        //Logger
        $this->Logger->log('info', 'Editou um artigo em Ciência e Tecnologia com o identificador ' . $id);
        return redirect("admin/ciencia-e-tecnologia/show/$id")->with('edit', '1');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Logger
        $this->Logger->log('info', 'Eliminou um artigo em Ciência e Tecnologia com o identificador ' . $id);
        ScienceAndTechnology::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
