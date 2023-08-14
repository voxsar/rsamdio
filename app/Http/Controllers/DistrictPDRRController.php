<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDistrictPDRRRequest;
use App\Http\Requests\UpdateDistrictPDRRRequest;
use App\Models\District;
use App\Models\DistrictPDRR;

class DistrictPDRRController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(District $district)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(District $district)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(District $district, StoreDistrictPDRRRequest $request)
    {
        //
        $districtpdrr = new DistrictPDRR();
        $districtpdrr->district_id = $district->id;
        $districtpdrr->name = $request->name;
        $districtpdrr->year = $request->year;
        //get the file and store the file and then get the http path and store it in the database
        $districtpdrr->profile_image = $request->file('image')->store('districts');        
        $districtpdrr->save();

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(District $district, DistrictPDRR $districtPDRR)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(District $district, DistrictPDRR $districtPDRR)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(District $district, UpdateDistrictPDRRRequest $request, DistrictPDRR $districtPDRR)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(District $district, DistrictPDRR $pdrr)
    {
        //
        $pdrr->delete();
        return back();
    }
}
