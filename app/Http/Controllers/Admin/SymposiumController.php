<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Symposium;
use Illuminate\Http\Request;

class SymposiumController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function list()
    {
        $response['symposium'] = Symposium::get();
        //Logger
        $this->Logger->log('info', 'Listou Simpósios');
        return view('admin.symposium.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.symposium.create.index');
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

            'title' => 'required|min:5',
            'link' => 'mimes:jpg,png,jpeg,pdf,docx|max:10256',
            'body' => 'required|min:4',
            'image' => 'required|mimes:jpg,png,jpeg,pdf,docx'
        ]);
        $Linkfile = $request->file('link')->store('symposium');
        $file = $request->file('image')->store('symposium');
        $symposium = Symposium::create([
            'image' => $file,
            'title' => $request->title,
            'link' => $Linkfile,
            'body' => $request->body,
        ]);
        //Logger
        $this->Logger->log('info', 'Cadastrou Simpósio com o título ' . $symposium->title);

        return redirect("admin/simposio/show/$symposium->id")->with('create', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response['symposium'] = Symposium::find($id);
        return view('admin.symposium.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['symposium'] = Symposium::find($id);
        return view('admin.symposium.edit.index', $response);
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
            'title' => 'required|min:5',
            'link' => 'mimes:jpg,png,jpeg,pdf,docx|max:10256',
            'body' => 'required|min:4',
            'image' => 'mimes:jpg,png,jpeg,pdf,docx'
        ]);


        if ($Linkfile = $request->file('link')) {
            $Linkfile = $Linkfile->store('Symposium');
        } else {
            $Linkfile = Symposium::find($id)->link;
        }

        if ($file = $request->file('image')) {
            $file = $file->store('Symposium');
        } else {
            $file = Symposium::find($id)->image;
        }


        Symposium::find($id)->update([
            'image' => $file,
            'title' => $request->title,
            'link' => $Linkfile,
            'body' => $request->body,
        ]);
        //Logger
        $this->Logger->log('info', 'Editou um Simpósio com o identificador ' . $id);
        return redirect("admin/simposio/show/$id")->with('edit', '1');
    }


    public function destroy($id)
    {
        //Logger
        $this->Logger->log('info', 'Eliminou um Simpósio com o identificador ' . $id);
        Symposium::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
