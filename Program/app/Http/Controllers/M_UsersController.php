<?php

namespace App\Http\Controllers;

use App\Models\M_Users;
use Illuminate\Http\Request;

class M_UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //=== READ RECRUITER LIST ===
    public function indexUR(Request $request)
    {
        if ($request->has('search')) {
            $data = M_Users::where('fk_position_id', 1)
                ->where('full_name', 'LIKE', '%' . $request->search . '%')
                ->orderBy('pk_user_id', 'desc')
                ->paginate(2);
        } else {
            $data = M_Users::where('fk_position_id', 1)
                ->orderBy('pk_user_id', 'desc')
                ->paginate(2);
        }
        return view('backPages.recruiterList', ['title' => 'rList', 'recruiterList' => $data]);
    }

    // === READ APPLICANT LIST ===
    public function indexUA(Request $request)
    {
        if ($request->has('search')) {
            $data = M_Users::where('fk_position_id', 2)
                ->where('full_name', 'LIKE', '%' . $request->search . '%')
                ->orderBy('pk_user_id', 'desc')
                ->paginate(2);
        } else {
            $data = M_Users::where('fk_position_id', 2)
                ->orderBy('pk_user_id', 'desc')
                ->paginate(2);
        }
        return view('backPages.applicantList', ['title' => 'aList', 'applicantList' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // === FORM CREATE RECRUITER ===
    public function createUR()
    {
        return view('backPages.newRecruiter', ['title' => 'nRecruiter']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // === CREATE RECRUITER ===
    public function storeUR(Request $request)
    {
        $validateData = $request->validate([
            'fk_position_id'    => 'required',
            'full_name'         => 'required|max:200',
            'gender'            => 'required',
            'place'             => 'required',
            'date_of_brith'     => 'required|date',
            'phone_number'      => 'required|min:12|max:13',
            'email'             => 'required',
            'address'           => 'required',
            'password'          => 'required',
            'photo'             => 'required|image'
        ]);

        if ($request->hasFile('photo')) {
            $validateData['photo'] = $request->file('photo')->store('img');
        }
        $validateData['password'] = bcrypt($validateData['password']);

        M_Users::create($validateData);
        return redirect()->route('Read_RecruiterList');
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
    // === DELETE RECRUITER === 
    public function destroyUR($id)
    {
        $data = M_Users::find($id);
        $data->delete();
        return redirect()->route('Read_RecruiterList');
    }

    // === DELETE APPLICANT ===
    public function destroyUA($id)
    {
        $data = M_Users::find($id);
        $data->delete();
        return redirect()->route('Read_ApplicantList');
    }
}
