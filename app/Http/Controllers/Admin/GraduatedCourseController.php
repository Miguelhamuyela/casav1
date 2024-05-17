<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\GraduatedCourse;
use Illuminate\Http\Request;

class GraduatedCourseController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $response['graduatedCourse'] =  GraduatedCourse::with('CurricularPlan')->find(1);
        return view('admin.graduatedCourse.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['graduatedCourse'] = GraduatedCourse::find($id);
        return view('admin.graduatedCourse.edit.index', $response);
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
            $file = $file->store('GraduatedCourse');
        } else {
            $file = GraduatedCourse::find($id)->image;
        }

        GraduatedCourse::find($id)->update([
            'image' => $file,
            'title' => $request->title,
            'body' => $request->body,
            'body_Text' => $request->body_Text
        ]);
        //Logger
        $this->Logger->log('info', 'Editou Licenciaturas com o identificador ' . $id);
        return redirect("admin/licenciaturas/show")->with('edit', '1');
    }


}
