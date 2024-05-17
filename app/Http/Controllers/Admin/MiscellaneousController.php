<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Miscellaneou;
use App\Models\MiscellaneouNews;
use Illuminate\Http\Request;

class MiscellaneousController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function list()
    {
        $response['miscellaneous'] = Miscellaneou::get();
        //Logger
        $this->Logger->log('info', 'Listou diversos');
        return view('admin.miscellaneou.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.miscellaneou.create.index');
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

        $file = $request->file('cover')->store('miscellaneou');
        $Linkfile = $request->file('link')->store('class');
        $miscellaneous = Miscellaneou::create([
            'cover' => $file,
            'title' => $request->title,
            'link' => $Linkfile,
            'eventDate' => $request->eventDate,
        ]);
        //Logger


        $this->Logger->log('info', 'Cadastrou diversos com o título ' . $miscellaneous->title);

        return redirect("admin/diversos/show/$miscellaneous->id")->with('create', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response['miscellaneous'] =  Miscellaneou::find($id);
        return view('admin.miscellaneou.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['miscellaneous'] = Miscellaneou::find($id);
        return view('admin.miscellaneou.edit.index', $response);
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
            'link' => 'mimes:pdf,docx,jpg,png,jpeg',
            'cover' => 'mimes:jpg,png,jpeg,pdf,docx'
        ]);


        if ($Linkfile= $request->file('link')) {
            $Linkfile= $Linkfile->store('Miscellaneous');
        } else {
            $Linkfile= Miscellaneou::find($id)->link;
        }

        if ($file = $request->file('cover')) {
            $file = $file->store('Miscellaneous');
        } else {
            $file = Miscellaneou::find($id)->cover;
        }
        Miscellaneou::find($id)->update([
            'cover' => $file,
            'title' => $request->title,
            'link' => $Linkfile,
            'eventDate' => $request->eventDate,
        ]);
        //Logger
        $this->Logger->log('info', 'Editou um diverso com o identificador ' . $id);
        return redirect("admin/diversos/show/$id")->with('edit', '1');
    }


    public function destroy($id)
    {
        //Logger
        $this->Logger->log('info', 'Eliminou um diverso com o identificador ' . $id);
        Miscellaneou::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
