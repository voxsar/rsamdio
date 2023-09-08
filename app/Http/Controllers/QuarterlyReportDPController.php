<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQuarterlyReportDPRequest;
use App\Http\Requests\UpdateQuarterlyReportDPRequest;
use App\Models\QuarterlyReport;
use App\Models\QuarterlyReportDP;

class QuarterlyReportDPController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(QuarterlyReport $report)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(QuarterlyReport $report)
    {
        //
        return view('reports.dp.create', compact('report'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(QuarterlyReport $report, StoreQuarterlyReportDPRequest $request)
    {
        //
        $dp = new QuarterlyReportDP();
        $dp->quarterly_report_id = $report->id;
        $dp->avenue_of_service = $request->avenue_of_service;
        $dp->area_of_focus = $request->area_of_focus;
        $dp->project_name = $request->project_name;
        $dp->project_description = $request->project_description;
        $dp->income = $request->income;
        $dp->expense = $request->expense;
        $dp->save();

        //check project_images exists and array then loop and store
        if ($request->hasFile('project_images')) {
            foreach ($request->file('project_images') as $image) {
                $image->store('public/project_images');
                $cp->project_images = [
                    'image' => $image->hashName(),
                ];
            }
        }
        return redirect()->route('reports.edit', $report);
    }

    /**
     * Display the specified resource.
     */
    public function show(QuarterlyReport $report, QuarterlyReportDP $dp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(QuarterlyReport $report, QuarterlyReportDP $dp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateQuarterlyReportDPRequest $request, QuarterlyReport $report, QuarterlyReportDP $dp)
    {
        //
        $dp->quarterly_report_id = $report->id;
        $dp->avenue_of_service = $request->avenue_of_service;
        $dp->area_of_focus = $request->area_of_focus;
        $dp->project_name = $request->project_name;
        $dp->project_description = $request->project_description;
        $dp->income = $request->income;
        $dp->expense = $request->expense;
        $dp->save();

        //check project_images exists and array then loop and store
        if ($request->hasFile('project_images')) {
            foreach ($request->file('project_images') as $image) {
                $image->store('public/project_images');
                $cp->project_images = [
                    'image' => $image->hashName(),
                ];
            }
        }
        return redirect()->route('reports.edit', $report);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(QuarterlyReport $report, QuarterlyReportDP $dp)
    {
        //
        $dp->delete();
        return back();
    }
}
