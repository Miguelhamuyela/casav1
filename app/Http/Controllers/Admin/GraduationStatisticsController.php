<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\GraduationStatistic;
use Illuminate\Http\Request;

class GraduationStatisticsController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    public function show()
    {
        $response['graduation'] =  GraduationStatistic::find(1);
        return view('admin.graduation.details.index', $response);
    }


    public function edit($id)
    {
        $response['graduation'] = GraduationStatistic::find($id);
        return view('admin.graduation.edit.index', $response);
    }

    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'totalGraduated' => 'required|min:1'
        ]);


        GraduationStatistic::find($id)->update([
            'totalGraduated' => $request->totalGraduated
        ]);
        //Logger
        $this->Logger->log('info', 'Editou licenciados com o identificador ' . $id);
        return redirect("admin/licenciados/show")->with('edit', '1');
    }



}
