<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use \App\Http\Requests\CreateStaffRequest;
use \App\Http\Requests\UpdateStaffRequest;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //fetch all staff
        return response()->json([
            'staff' => Staff::get(),
        ]);
    }

    /**
     * Store a newly created staff in database.
     *
     * @param  \App\Http\Requests\CreateStaffRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateStaffRequest $request)
    {
        //validate request data and save to db
        $staff = Staff::create($request->validated());
        return response()->json([
            'message' => 'Staff Created',
            'Staff' => $staff
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getStaff(Request $id)
    {
        //find staff from DB and return
        $staff = Staff::findOrFail($id);
        return response()->json(['staff' => $staff]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStaffRequest $request, $id)
    {
        //check if model exists in db
        $staff = Staff::findOrFail($id);
        //update the validated request to model
        $staff->update($request->validated());
        return response()->json([
            'message' => 'Staff Updated',
            'Staff' => $staff
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $staff = Staff::findOrFail($id);
        $staff->delete();
        return response()->json([
            'success' => true,
        ]);
    }
}
