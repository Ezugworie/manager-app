<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;
use App\Http\Requests\CreateDriverRequest;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //fetch all drivers
        return response()->json([
            'drivers' => Driver::get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\CreateDriverRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateDriverRequest $request)
    {
        //validate request data and save to db
        $driver = Driver::create($request->validated());
        return response()->json([
            'message' => 'Driver Created',
            'Driver' => $driver
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function getDriver($id)
    {
        //find bin from DB and return
        $driver = Driver::findOrFail($id);
        return response()->json(['driver' => $driver]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function update(CreateDriverRequest $request, $id)
    {
        //check if model exists in db
        $driver = Driver::findOrFail($id);
        //update the validated request to model
        $driver->update($request->validated());
        return response()->json([
            'message' => 'Driver Updated',
            'Driver' => $driver
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $driver = Driver::findOrFail($id);
        $driver->delete();
        return response()->json([
            'success' => true,
        ]);
    }
}
