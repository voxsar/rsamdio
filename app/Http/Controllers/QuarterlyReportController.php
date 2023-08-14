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
        $reports = auth()->user()->district->reports;
        $data = [
            'reports' => $reports
        ];
        return view('reports.index', $data);
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
        $quarterlyReport = new QuarterlyReport();
        $quarterlyReport->total_rotaract_clubs = $request->total_rotaract_clubs;
        $quarterlyReport->total_rotaractors = $request->total_rotaractors;
        $quarterlyReport->total_charter_clubs = $request->total_charter_clubs;
        $quarterlyReport->total_new_rotaractors = $request->total_new_rotaractors;

        $quarterlyReport->total_club_service_projects = $request->total_club_service_projects;
        $quarterlyReport->total_community_service_projects = $request->total_community_service_projects;
        $quarterlyReport->total_international_service_projects = $request->total_international_service_projects;
        $quarterlyReport->total_professional_development_service_projects = $request->total_professional_development_service_projects;
        $quarterlyReport->total_other_service_projects = $request->total_other_service_projects;
        $quarterlyReport->district_newsletter_link = $request->district_newsletter_link;
        $quarterlyReport->district_id = auth()->user()->district->id;
        $quarterlyReport->save();
        return redirect()->route('reports.edit', $quarterlyReport);
    }

    /**
     * Display the specified resource.
     */
    public function show(QuarterlyReport $report)
    {
        //
        return view('reports.show', compact('report'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(QuarterlyReport $report)
    {
        //
        return view('reports.edit', compact('report'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateQuarterlyReportRequest $request, QuarterlyReport $report)
    {
        //
        $report->total_rotaract_clubs = $request->total_rotaract_clubs;
        $report->total_rotaractors = $request->total_rotaractors;
        $report->total_charter_clubs = $request->total_charter_clubs;
        $report->total_new_rotaractors = $request->total_new_rotaractors;

        $report->total_club_service_projects = $request->total_club_service_projects;
        $report->total_community_service_projects = $request->total_community_service_projects;
        $report->total_international_service_projects = $request->total_international_service_projects;
        $report->total_professional_development_service_projects = $request->total_professional_development_service_projects;
        $report->total_other_service_projects = $request->total_other_service_projects;
        $report->district_newsletter_link = $request->district_newsletter_link;
        $report->district_id = auth()->user()->district->id;
        $report->save();
        return redirect()->route('reports.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(QuarterlyReport $report)
    {
        //
        $report->delete();
        return redirect()->route('reports.index');
    }
}
