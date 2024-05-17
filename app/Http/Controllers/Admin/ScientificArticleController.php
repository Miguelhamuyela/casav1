<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\ScientificArticle;
use Illuminate\Http\Request;

class ScientificArticleController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function list()
    {
        $response['scientificArticle'] = ScientificArticle::get();
        //Logger
        $this->Logger->log('info', 'Listou artigos cientificos');
        return view('admin.scientificArticle.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.scientificArticle.create.index');
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
            'link' => 'required|mimes:jpg,png,jpeg,pdf,docx',
            'cover' => 'required|required|mimes:jpg,png,jpeg,pdf,docx'
        ]);

        $Linkfile = $request->file('link')->store('class');
        $file = $request->file('cover')->store('class');
        $scientificArticle = ScientificArticle::create([
            'cover' => $file,
            'title' => $request->title,
            'link' => $Linkfile,
            'eventDate' => $request->eventDate,
        ]);
        //Logger
        $this->Logger->log('info', 'Cadastrou revistas com o título ' . $scientificArticle->title);

        return redirect("admin/artigos-cientificos/show/$scientificArticle->id")->with('create', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response['scientificArticle'] = ScientificArticle::find($id);
        return view('admin.scientificArticle.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['scientificArticle'] = ScientificArticle::find($id);
        return view('admin.scientificArticle.edit.index', $response);
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
            'link' => 'mimes:jpg,png,jpeg,pdf,docx',
            'cover' => 'mimes:jpg,png,jpeg,pdf,docx'
        ]);


        if ($Linkfile = $request->file('cover')) {
            $Linkfile = $Linkfile->store('ScientificArticle');
        } else {
            $Linkfile = ScientificArticle::find($id)->cover;
        }

        if ($file = $request->file('cover')) {
            $file = $file->store('ScientificArticle');
        } else {
            $file = ScientificArticle::find($id)->cover;
        }


        ScientificArticle::find($id)->update([
            'cover' => $file,
            'title' => $request->title,
            'link' => $Linkfile,
            'eventDate' => $request->eventDate,
        ]);
        //Logger
        $this->Logger->log('info', 'Editou um artigo cientifico com o identificador ' . $id);
        return redirect("admin/artigos-cientificos/show/$id")->with('edit', '1');
    }


    public function destroy($id)
    {
        //Logger
        $this->Logger->log('info', 'Eliminou um artigo cientifico com o identificador ' . $id);
        ScientificArticle::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
