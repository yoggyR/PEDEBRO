<?php

namespace App\Http\Controllers;

use App\Models\M_Jobs;
use App\Models\Bridges;
use App\Models\M_Levels;
use App\Models\M_Locations;
use App\Models\M_Educations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class M_JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexJV()
    {
        $jobs = M_Jobs::paginate(5);
        return view('backPages.opened', ['title' => 'opened', 'jobs' => $jobs]);
    }

    public function indexJVAPI()
    {
        $jobs = M_Jobs::paginate(5);
        return response()->json($jobs);
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
        DB::beginTransaction();
        try {
            $validateData = $request->validate([
                'job_name'      => 'required',
                'max_age'       => 'required|integer',
                'hard_skill'    => 'required',
                'soft_skill'    => 'required',
                'date_created'  => 'required|date',
                'closing_date'  => 'required|date',
                'description'   => 'required',
                'job_status'    => 'required',
            ]);
            $job = M_Jobs::insertGetId($validateData);

            foreach ($request->input(['pk_level_id']) as $level) {
                Bridges::create([
                    'fk_job_id'     => $job,
                    'fk_level_id'   => $level
                ]);
            }

            foreach ($request->input(['pk_education_id']) as $education) {
                Bridges::create([
                    'fk_job_id'         => $job,
                    'fk_education_id'   => $education
                ]);
            }

            foreach ($request->input(['pk_location_id']) as $location) {
                Bridges::create([
                    'fk_job_id'        => $job,
                    'fk_location_id'   => $location
                ]);
            }
            DB::commit();
            return redirect()->route('Read_JobVacancies');
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    public function storeJVAPI(Request $request)
    {
        DB::beginTransaction();
        try {
            $validateData = $request->validate([
                'job_name'      => 'required',
                'max_age'       => 'required|integer',
                'hard_skill'    => 'required',
                'soft_skill'    => 'required',
                'date_created'  => 'required|date',
                'closing_date'  => 'required|date',
                'description'   => 'required',
                'job_status'    => 'required',
            ]);
            $job = M_Jobs::create($validateData);
            // foreach ($request->input(['pk_level_id']) as $level) {
            //     $levels = Bridges::create([
            //         'fk_job_id'     => $job,
            //         'fk_level_id'   => $level
            //     ]);
            // }

            // foreach ($request->input(['pk_education_id']) as $education) {
            //     $education = Bridges::create([
            //         'fk_job_id'         => $job,
            //         'fk_education_id'   => $education
            //     ]);
            // }

            // foreach ($request->input(['pk_location_id']) as $location) {
            //     $location = Bridges::create([
            //         'fk_job_id'        => $job,
            //         'fk_location_id'   => $location
            //     ]);
            // }
            DB::commit();
            return response()->json($job);
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showJV($id)
    {
        $jb1  = M_Jobs::find($id);
        $jb2  = DB::table('bridges')
            ->leftJoin('m__levels', 'bridges.fk_level_id', 'm__levels.pk_level_id')
            ->leftJoin('m__educations', 'bridges.fk_education_id', 'm__educations.pk_education_id')
            ->leftJoin('m__locations', 'bridges.fk_location_id', 'm__locations.pk_location_id')
            ->where('fk_job_id', $id)
            ->get();
        return view('backPages.detailsJob', [
            'title' => 'details',
            'details1' => $jb1,
            'details2' => $jb2
        ]);
    }

    public function showJVAPI($id)
    {
        $jb1  = M_Jobs::find($id);
        $jb2  = DB::table('bridges')
            ->leftJoin('m__levels', 'bridges.fk_level_id', 'm__levels.pk_level_id')
            ->leftJoin('m__educations', 'bridges.fk_education_id', 'm__educations.pk_education_id')
            ->leftJoin('m__locations', 'bridges.fk_location_id', 'm__locations.pk_location_id')
            ->where('fk_job_id', $id)
            ->get();
        return response()->json([$jb1, $jb2]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editJV($id)
    {
        $jobs       = M_Jobs::find($id);
        
        $levelselected  = DB::table('bridges')
            ->join('m__levels', 'bridges.fk_level_id', 'm__levels.pk_level_id')
            ->where('fk_job_id', $id)
            ->get();

        $listlevel = DB::table('m__level')->get();

        $educations = M_Educations::all();
        $locations  = M_Locations::all();

        return view('backPages.editJob', [
            'title'         => 'eJob',
            'jobs'          => $jobs,
            'levels'        => $levels,
            'educations'    => $educations,
            'locations'     => $locations
        ]);
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
