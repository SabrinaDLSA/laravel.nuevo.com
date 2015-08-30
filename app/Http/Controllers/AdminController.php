<?php

namespace nuevo\Http\Controllers;
use nuevo\Serie;
use nuevo\Series_info;
use Illuminate\Http\Request;
use DB;
use nuevo\Http\Requests;
use nuevo\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('desktop');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function series()
    {
      $series = DB::table('series')
      ->join('series_infos', 'series.id', '=', 'series_infos.serie_id')->paginate(5);
        return view('desktop')->with('series', $series);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function comics(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function music($id)
    {
        //
    }

    public function edit($id)
    {
      $serie = DB::table('series')->where('series.id', $id)
      ->join('series_infos', 'series.id', '=', 'series_infos.serie_id')->first();
        return view('edit')->with('serie', $serie);
    }

    public function delete($id)
    {
        $serie = Serie::find($id);
        return view('edit')->with('serie', $serie);
    }

    public function refresh($id){
        $p = Serie::find($id);
        $p->Name = \Input::get('Name');
        $p->Photo = \Input::get('Photo');
        $p->resluggify();
        $p->save();
        $p = Series_info::find($id);
        $p->Description = \Input::get('Description');
        $p->Genre = \Input::get('Genre');
        $p->Start = \Input::get('Start');
        $p->Finish = \Input::get('Finish');
        return \Redirect::route('profile');
    }
}
