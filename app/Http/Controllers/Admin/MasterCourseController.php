<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\MasterCourse;
use Illuminate\Http\Request;

class MasterCourseController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }



    public function show()
    {
        $response['masterCourse'] =  MasterCourse::find(1);
        return view('admin.masterCourse.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['masterCourse'] = MasterCourse::find($id);
        return view('admin.masterCourse.edit.index', $response);
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
            'body_Text' => 'required|min:5',
            'title' => 'required|min:3',
            'image' => 'mimes:jpg,png,jpeg,pdf,docx'
        ]);

        if ($file = $request->file('image')) {
            $file = $file->store('MasterCourse');
        } else {
            $file = MasterCourse::find($id)->image;
        }

        MasterCourse::find($id)->update([
            'image' => $file,
            'title' => $request->title,
            'body' => $request->body,
            'body_Text' => $request->body_Text
        ]);
        //Logger
        $this->Logger->log('info', 'Editou Mestrados com o identificador ' . $id);
        return redirect("admin/mestrado/show")->with('edit', '1');
    }



}
