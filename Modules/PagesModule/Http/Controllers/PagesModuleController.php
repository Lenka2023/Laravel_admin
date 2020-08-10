<?php

namespace Modules\PagesModule\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use DB;
class PagesModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('pagesmodule::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('pagesmodule::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
       
     $result=false;
        if($request->has('title') & $request->has('slug') & $request->has('url') & $request->has('text')){

        $result=DB::insert("INSERT INTO pagemodule (title, slug, url, text ) VALUES (:title, :slug, :url, :text)",
            [   'title'=>$request->input('title'),
                'slug'=>$request->input('slug'),
                'url'=>$request->input('url'),
                'text'=>$request->input('text')]);

    }
}

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {

        return view('pagesmodule::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('pagesmodule::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
         $result=DB::update("UPDATE pagemodule SET title = :title, slug= :slug, url=:url, text= :texts WHERE id= :id",
        [
            'id'=>$id,
            'title'=>$request->input('title'),
            'slug'=>$request->input('slug'),
            'url'=>$request->input('url'),
            'text'=>$request->input('text')
        ]);
        return json_encode($result, JSON_UNESCAPED_UNICODE);
}
    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
