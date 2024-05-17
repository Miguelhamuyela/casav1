<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Congress;
use Illuminate\Http\Request;

class CongressController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function list()
    {
        $response['congress'] = Congress::get();
        //Logger
        $this->Logger->log('info', 'Listou congressos');
        return view('admin.congress.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.congress.create.index');
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
            'body' => 'required|min:5',
            'startTime' => 'required',
            'endTime' => 'required',
            'localization' => 'required',
            'dateEvent' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg'
        ]);

        $file = $request->file('image')->store('congress');

        $congress = Congress::create([
            'image' => $file,
            'title' => $request->title,
            'startTime' => $request->startTime,
            'endTime' => $request->endTime,
            'localization' => $request->localization,
            'body' => $request->body,
            'dateEvent' => $request->dateEvent
        ]);
        //Logger
        $this->Logger->log('info', 'Cadastrou congresso com o título ' . $congress->title);

        return redirect("admin/congresso/show/$congress->id")->with('create', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response['congress'] =  Congress::find($id);
        return view('admin.congress.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['congress'] = Congress::find($id);
        return view('admin.congress.edit.index', $response);
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
            'body' => 'required|min:5',
            'startTime' => 'required',
            'endTime' => 'required',
            'localization' => 'required',
            'dateEvent' => 'required',
            'image' => 'mimes:jpg,png,jpeg'
        ]);

        if ($file = $request->file('image')) {
            $file = $file->store('Congress');
        } else {
            $file = Congress::find($id)->image;
        }



       Congress::find($id)->update([
            'image' => $file,
            'title' => $request->title,
            'startTime' => $request->startTime,
            'endTime' => $request->endTime,
            'localization' => $request->localization,
            'body' => $request->body,
            'dateEvent' => $request->dateEvent

        ]);
        //Logger
        $this->Logger->log('info', 'Editou um congresso  com o identificador ' . $id);
        return redirect("admin/congresso/show/$id")->with('edit', '1');
    }


    public function destroy($id)
    {
        //Logger
        $this->Logger->log('info', 'Eliminou um congresso com o identificador ' . $id);
        Congress::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
