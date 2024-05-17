<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Fairs;

use Illuminate\Http\Request;

class FairsController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function list()
    {
        $response['fairs'] = Fairs::get();
        //Logger
        $this->Logger->log('info', 'Listou feiras');
        return view('admin.fairs.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.fairs.create.index');
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

        $file = $request->file('image')->store('festivals');

        $fairs = Fairs::create([
            'image' => $file,
            'title' => $request->title,
            'startTime' => $request->startTime,
            'endTime' => $request->endTime,
            'localization' => $request->localization,
            'body' => $request->body,
            'dateEvent' => $request->dateEvent
        ]);
        //Logger
        $this->Logger->log('info', 'Cadastrou feiras com o título ' . $fairs->title);

        return redirect("admin/feira/show/$fairs->id")->with('create', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response['fairs'] =  Fairs::find($id);
        return view('admin.fairs.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['fairs'] = Fairs::find($id);
        return view('admin.fairs.edit.index', $response);
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
            $file = $file->store('Fairs');
        } else {
            $file = Fairs::find($id)->image;
        }



       Fairs::find($id)->update([
            'image' => $file,
            'title' => $request->title,
            'startTime' => $request->startTime,
            'endTime' => $request->endTime,
            'localization' => $request->localization,
            'body' => $request->body,
            'dateEvent' => $request->dateEvent

        ]);
        //Logger
        $this->Logger->log('info', 'Editou uma feira  com o identificador ' . $id);
        return redirect("admin/feira/show/$id")->with('edit', '1');
    }


    public function destroy($id)
    {
        //Logger
        $this->Logger->log('info', 'Eliminou uma feira com o identificador ' . $id);
        Fairs::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }



}
