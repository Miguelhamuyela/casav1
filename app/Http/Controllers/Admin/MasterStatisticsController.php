<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\MasterStatistic;
use Illuminate\Http\Request;

class MasterStatisticsController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    public function show()
    {
        $response['master'] =  MasterStatistic::find(1);
        return view('admin.master.details.index', $response);
    }


    public function edit($id)
    {
        $response['master'] = MasterStatistic::find($id);
        return view('admin.master.edit.index', $response);
    }

    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'totalMaster' => 'required|min:1'
        ]);


        MasterStatistic::find($id)->update([
            'totalMaster' => $request->totalMaster
        ]);
        //Logger
        $this->Logger->log('info', 'Editou Mestrado com o identificador ' . $id);
        return redirect("admin/mestrados/show")->with('edit', '1');
    }
}
