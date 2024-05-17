<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{

    public function show()
    {
        $response['history'] = History::find(1);
        return view('admin.history.details.index', $response);
    }

    public function edit($id)

    {
        $response['history'] = History::find($id);
        return view('admin.history.edit.index',  $response);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|min:5',
            'image' => 'mimes:png,jpg,jpeg',
            'body' => 'required|min:5',
            'Dean_body' => 'required|min:5'

        ]);

        if ($file = $request->file('image')) {
            $file = $file->store('History');
        } else {
            $file = History::find($id)->image;
        }


        $AboutRoute =  History::find($id)->update([
            'body' => $request->body,
            'Dean_body' => $request->Dean_body,
            'title'=> $request->title,
            'image'=> $file
        ]);

        return redirect("admin/historia/show")->with('edit', '1');
    }
}
