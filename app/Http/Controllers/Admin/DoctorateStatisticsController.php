<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\DoctorateStatistic;
use Illuminate\Http\Request;

class DoctorateStatisticsController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    public function show()
    {
        $response['doctorate'] =  DoctorateStatistic::find(1);
        return view('admin.doctorate.details.index', $response);
    }


    public function edit($id)
    {
        $response['doctorate'] = DoctorateStatistic::find($id);
        return view('admin.doctorate.edit.index', $response);
    }

    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'totalDoctorate' => 'required|min:1'
        ]);


        DoctorateStatistic::find($id)->update([
            'totalDoctorate' => $request->totalDoctorate
        ]);
        //Logger
        $this->Logger->log('info', 'Editou Doutoramento com o identificador ' . $id);
        return redirect("admin/doutoramentos/show")->with('edit', '1');
    }

}
