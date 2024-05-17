<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Classes;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function list()
    {
        $response['class'] = Classes::get();
        //Logger
        $this->Logger->log('info', 'Listou aulas');
        return view('admin.class.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.class.create.index');
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
            'eventDate' => 'required|min:5|max:255',
            'title' => 'required|min:5',
            'link' => 'required|mimes:jpg,png,jpeg,pdf,docx|max:10256',
            'cover' => 'required|mimes:jpg,png,jpeg,pdf,docx|max:10256'
        ]);

        $Linkfile = $request->file('link')->store('class');
        $file = $request->file('cover')->store('class');
        $class = Classes::create([
            'cover' => $file,
            'title' => $request->title,
            'link' => $Linkfile,
            'eventDate' => $request->eventDate,
        ]);
        //Logger
        $this->Logger->log('info', 'Cadastrou aulas com o título ' . $class->title);

        return redirect("admin/aulas/show/$class->id")->with('create', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response['class'] =  Classes::find($id);
        return view('admin.class.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['class'] = Classes::find($id);
        return view('admin.class.edit.index', $response);
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
            'eventDate' => 'required|min:5|max:255',
            'title' => 'required|min:5',
            'link' => 'mimes:jpg,png,jpeg,pdf,docx|max:10256',
            'cover' => 'mimes:jpg,png,jpeg,pdf,docx|max:10256'
        ]);


        if ($Linkfile = $request->file('link')) {
            $Linkfile = $Linkfile->store('Classes');
        } else {
            $Linkfile = Classes::find($id)->link;
        }

        if ($file = $request->file('cover')) {
            $file = $file->store('Classes');
        } else {
            $file = Classes::find($id)->cover;
        }


        Classes::find($id)->update([
            'cover' => $file,
            'title' => $request->title,
            'link' => $Linkfile,
            'eventDate' => $request->eventDate,
        ]);
        //Logger
        $this->Logger->log('info', 'Editou uma aula com o identificador ' . $id);
        return redirect("admin/aulas/show/$id")->with('edit', '1');
    }


    public function destroy($id)
    {
        //Logger
        $this->Logger->log('info', 'Eliminou uma aula com o identificador ' . $id);
        Classes::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
