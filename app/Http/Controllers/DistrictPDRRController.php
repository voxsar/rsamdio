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
    public function destroy(DistrictPDRR $districtPDRR)
    {
        //
    }
}
