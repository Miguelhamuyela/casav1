<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Magazine;
use Illuminate\Http\Request;

class MagazineController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function list()
    {
        $response['magazine'] = Magazine::get();
        //Logger
        $this->Logger->log('info', 'Listou revistas');
        return view('admin.magazine.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.magazine.create.index');
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
            'link' => 'mimes:pdf,docx,jpg,png,jpeg|max:10256',
            'cover' => 'required|required|mimes:jpg,png,jpeg,pdf,docx|max:10256'
        ]);

        $file = $request->file('cover')->store('class');
        $Linkfile = $request->file('link')->store('class');

        $magazine = Magazine::create([
            'cover' => $file,
            'title' => $request->title,
            'link' => $Linkfile,
            'eventDate' => $request->eventDate,
        ]);
        //Logger
        $this->Logger->log('info', 'Cadastrou revistas com o título ' . $magazine->title);

        return redirect("admin/revistas/show/$magazine->id")->with('create', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response['magazine'] =  Magazine::find($id);
        return view('admin.magazine.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['magazine'] = Magazine::find($id);
        return view('admin.magazine.edit.index', $response);
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
            'link' => 'required|mimes:jpg,png,jpeg,pdf,docx|max:10256',
            'cover' => 'mimes:jpg,png,jpeg,pdf,docx|max:10256'
        ]);

        if ($file = $request->file('cover')) {
            $file = $file->store('Magazine');
        } else {
            $file = Magazine::find($id)->cover;
        }

        if ($Linkfile = $request->file('link')) {
            $Linkfile = $Linkfile->store('Magazine');
        } else {
            $Linkfile = Magazine::find($id)->link;
        }


        Magazine::find($id)->update([
            'cover' => $file,
            'title' => $request->title,
            'link' => $Linkfile,
            'eventDate' => $request->eventDate,
        ]);
        //Logger
        $this->Logger->log('info', 'Editou uma aula com o identificador ' . $id);
        return redirect("admin/revistas/show/$id")->with('edit', '1');
    }


    public function destroy($id)
    {
        //Logger
        $this->Logger->log('info', 'Eliminou uma revista com o identificador ' . $id);
        Magazine::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
