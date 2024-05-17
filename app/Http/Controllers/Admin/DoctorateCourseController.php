<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\DoctorateCourse;
use Illuminate\Http\Request;

class DoctorateCourseController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $response['doctorateCourse'] =  DoctorateCourse::with('CurricularPlan')->find(1);
        return view('admin.doctorateCourse.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['doctorateCourse'] = DoctorateCourse::find($id);
        return view('admin.doctorateCourse.edit.index', $response);
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
            'body_Text' => 'required|min:5',
            'image' => 'mimes:jpg,png,jpeg,pdf,docx'
        ]);

        if ($file = $request->file('image')) {
            $file = $file->store('DoctorateCourse');
        } else {
            $file = DoctorateCourse::find($id)->image;
        }

        DoctorateCourse::find($id)->update([
            'image' => $file,
            'title' => $request->title,
            'body' => $request->body,
            'body_Text' => $request->body_Text
        ]);
        //Logger
        $this->Logger->log('info', 'Editou Doutoramentos com o identificador ' . $id);
        return redirect("admin/doutoramento/show")->with('edit', '1');
    }



}
