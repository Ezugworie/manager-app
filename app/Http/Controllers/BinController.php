<?php

namespace App\Http\Controllers;

use App\Models\Bin;
use Illuminate\Http\Request;
use App\Http\Requests\CreateBinRequest;

class BinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //fetch all bins
        return response()->json([
            'bins' => Bin::get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\CreateBinRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateBinRequest $request)
    {
        //validate request data and save to db
        $bin = Bin::create($request->validated());
        return response()->json([
            'message' => 'Bin Created',
            'Bin' => $bin
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bin  $bin
     * @return \Illuminate\Http\Response
     */
    public function getBin($id)
    {
        //find bin from DB and return
        $bin = Bin::findOrFail($id);
        return response()->json(['bin' => $bin]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bin  $bin
     * @return \Illuminate\Http\Response
     */
    public function update(CreateBinRequest $request, $id)
    {
         //check if model exists in db
         $bin = Bin::findOrFail($id);
         //update the validated request to model
         $bin->update($request->validated());
         return response()->json([
             'message' => 'Bin Updated',
             'Bin' => $bin
         ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bin  $bin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $bin = Bin::findOrFail($id);
        $bin->delete();
        return response()->json([
            'success' => true,
        ]);
    }
}
