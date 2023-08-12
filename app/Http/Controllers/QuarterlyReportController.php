<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQuarterlyReportRequest;
use App\Http\Requests\UpdateQuarterlyReportRequest;
use App\Models\QuarterlyReport;

class QuarterlyReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        
        return view('reports.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('reports.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreQuarterlyReportRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(QuarterlyReport $quarterlyReport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(QuarterlyReport $quarterlyReport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateQuarterlyReportRequest $request, QuarterlyReport $quarterlyReport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(QuarterlyReport $quarterlyReport)
    {
        //
    }
}
