<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreDistrictRequest;
use App\Http\Requests\UpdateDistrictRequest;
use App\Models\District;
use App\Models\User;

class DistrictController extends Controller
{
    public function profile(){
        $data = array(
            'title' => auth()->user()->name,
            'pdrrs' => auth()->user()->district->pdrrs,
        );
        return view('profile.index', $data);
    }

    public function profileupdate(Request $request){
        $request->validate([
            'district_number' => 'required',
            'drr_name' => 'required',
            'drs_name' => 'required',
            'description' => 'required',
        ]);
        return $request->all();
        return back();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $districts = District::all();
        return view('districts.index', compact('districts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('districts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDistrictRequest $request)
    {
        //
        $district = new District();
        $district->district_number = $request->district_number;
        $district->drr_name = $request->drr_name;
        $district->drs_name = $request->drs_name;
        $district->description = $request->description;
        $district->save();

        $user1 = new User();
        $user1->name = $request->drr_name;
        $user1->email = $request->drremail;
        $user1->password = bcrypt($request->drrpassword);
        $user1->district_id = $district->id;
        $user1->save();

        $user2 = new User();
        $user2->name = $request->drs_name;
        $user2->email = $request->drsemail;
        $user2->password = bcrypt($request->drspassword);
        $user2->district_id = $district->id;
        $user2->save();

        return redirect()->route('districts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(District $district)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(District $district)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDistrictRequest $request, District $district)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(District $district)
    {
        //
    }
}
