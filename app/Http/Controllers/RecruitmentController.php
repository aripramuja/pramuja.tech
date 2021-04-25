<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\recruitment_registration;
class RecruitmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function recruitment()
    {
        return view('administrator/recruitment');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $recruitment_registration= new recruitment_registration;
        $recruitment_registration->name=$request->name;
        $recruitment_registration->email=$request->email;
        $recruitment_registration->handphone=$request->handphone;
        $recruitment_registration->position=$request->position;
        $recruitment_registration->clasification=$request->clasification;
        $file = $request->file('file');
        $namefile=$file->getClientOriginalName();
        $extention=$file->getClientOriginalExtension();
        $newfilename=$namefile . '.' . $extention;
        $personal = $request->file('file')->storeAs('DocumentRegistration', $newfilename);
        $recruitment_registration->personal=$personal;
        $recruitment_registration->save();
        return redirect('/career/network-engineer');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $applicant = recruitment_registration::all();
        return view('administrator/applicant', ['applicant' => $applicant]);
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
