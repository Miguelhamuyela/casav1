<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\CultureAndSport;
use Illuminate\Http\Request;

class CultureAndSportController extends Controller
{

    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    public function list()
    {

        $response['cultureAndSport'] = CultureAndSport::get();
        //Logger
        $this->Logger->log('info', 'Listou as Cultura e Desporto');
        return view('admin.cultureAndSport.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Logger
        $this->Logger->log('info', 'Entrou em Cadastrar Cultura e Desporto');
        return view('admin.cultureAndSport.create.index');
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
            'category' => 'required|min:5|max:255',
            'body' => 'required|min:5',
            'image' => 'required|mimes:jpg,png,jpeg',
            'date' => 'required',

        ]);
        $file = $request->file('image')->store('cultureAndSport');
        $cultureAndSport = CultureAndSport::create([
            'path' => $file,
            'title' => $request->title,
            'category' => $request->category,
            'body' => $request->body,
            'date' => $request->date
        ]);
        //Logger
        $this->Logger->log('info', 'Cadastrou em Cultura e Desporto um Artigo com o titulo ' . $cultureAndSport->title);

        return redirect("admin/cultura-e-desporto/show/$cultureAndSport->id")->with('create', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $response['cultureAndSport'] = CultureAndSport::find($id);

        //Logger
        $this->Logger->log('info', 'Visualizar um artigo em Cultura e Desporto com o identificador ' . $id);
        return view('admin.cultureAndSport.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $response['cultureAndSport'] = CultureAndSport::find($id);
        //Logger
        $this->Logger->log('info', 'Entrou em editar um artigo em Cultura e Desporto com o identificador ' . $id);
        return view('admin.cultureAndSport.edit.index', $response);
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
            'category' => 'required|min:5|max:255',
            'body' => 'required|min:5',
            'date' => 'required',
            'image' => 'mimes:jpg,png,jpeg',
        ]);

        if ($file = $request->file('image')) {
            $file = $file->store('cultureAndSport');
        } else {
            $file = CultureAndSport::find($id)->path;
        }
        CultureAndSport::find($id)->update([
            'path' => $file,
            'title' => $request->title,
            'category' => $request->category,
            'body' => $request->body,
            'date' => $request->date
        ]);
        //Logger
        $this->Logger->log('info', 'Editou um artigo em Cultura e Desporto com o identificador ' . $id);
        return redirect("admin/cultura-e-desporto/show/$id")->with('edit', '1');
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
        $this->Logger->log('info', 'Eliminou um artigo em Cultura e Desporto com o identificador ' . $id);
        CultureAndSport::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
