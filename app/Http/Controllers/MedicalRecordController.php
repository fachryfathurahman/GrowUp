<?php

namespace App\Http\Controllers;

use App\Http\Requests\MedicalRecordRequest;
use App\Models\MedicalRecord;
use App\Http\Requests\StoreMedicalRecordRequest;
use App\Http\Requests\UpdateMedicalRecordRequest;

class MedicalRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.medical_record');
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
     * @param  \App\Http\Requests\StoreMedicalRecordRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MedicalRecordRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MedicalRecord  $medicalRecord
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MedicalRecord  $medicalRecord
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMedicalRecordRequest  $request
     * @param  \App\Models\MedicalRecord  $medicalRecord
     * @return \Illuminate\Http\Response
     */
    public function update(MedicalRecordRequest $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MedicalRecord  $medicalRecord
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
