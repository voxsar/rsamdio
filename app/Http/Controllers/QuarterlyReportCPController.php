<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQuarterlyReportCPRequest;
use App\Http\Requests\UpdateQuarterlyReportCPRequest;
use App\Models\QuarterlyReport;
use App\Models\QuarterlyReportCP;

class QuarterlyReportCPController extends Controller
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
        return view('reports.cp.create', compact('report'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(QuarterlyReport $report, StoreQuarterlyReportCPRequest $request)
    {
        //
        $cp = new QuarterlyReportCP();
        $cp->quarterly_report_id = $report->id;
        $cp->avenue_of_service = $request->avenue_of_service;
        $cp->area_of_focus = $request->area_of_focus;
        $cp->project_name = $request->project_name;
        $cp->project_description = $request->project_description;
        $cp->income = $request->income;
        $cp->expense = $request->expense;
        $cp->save();

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
    public function show(QuarterlyReport $report, QuarterlyReportCP $cp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(QuarterlyReport $report, QuarterlyReportCP $cp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateQuarterlyReportCPRequest $request, QuarterlyReport $report, QuarterlyReportCP $cp)
    {
        //
        $cp->quarterly_report_id = $report->id;
        $cp->avenue_of_service = $request->avenue_of_service;
        $cp->area_of_focus = $request->area_of_focus;
        $cp->project_name = $request->project_name;
        $cp->project_description = $request->project_description;
        $cp->income = $request->income;
        $cp->expense = $request->expense;
        $cp->save();

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
    public function destroy(QuarterlyReport $report, QuarterlyReportCP $cp)
    {
        //
        $cp->delete();
        return back();
    }
}
