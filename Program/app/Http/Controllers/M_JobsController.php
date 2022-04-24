<?php

namespace App\Http\Controllers;

use App\Models\M_Levels;
use App\Models\M_Locations;
use App\Models\M_Educations;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\M_Jobs;

class M_JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexJV()
    {
        return view('backPages.opened', ['title' => 'opened']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createJV()
    {
        $education  = M_Educations::all();
        $level      = M_Levels::all();
        $location   = M_Locations::all();
        return view('backPages.newJob', [
            'title'         => 'nJobs',
            'educations'    => $education,
            'levels'        => $level,
            'locations'     => $location
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeJV(Request $request)
    {
        M_Jobs::create($request->all());
        return redirect()->route('Read_JobVacancies');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
