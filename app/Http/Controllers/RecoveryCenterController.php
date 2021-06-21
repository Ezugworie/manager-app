<?php

namespace App\Http\Controllers;

use App\Models\RecoveryCenter;
use Illuminate\Http\Request;
use App\Http\Requests\CreateRecoveryCenterRequest;

class RecoveryCenterController extends Controller
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
            'recoveryCenter' => RecoveryCenter::get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\CreateRecoveryCenterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRecoveryCenterRequest $request)
    {
        //validate request data and save to db
        $recoveryCenter = RecoveryCenter::create($request->validated());
        return response()->json([
            'message' => 'Recovery Center Created',
            'RecoveryCenter' => $recoveryCenter

        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RecoveryCenter  $recoveryCenter
     * @return \Illuminate\Http\Response
     */
    public function getRecoveryCenter($id)
    {
        //find recovery center from DB and return
        $recoveryCenter = RecoveryCenter::findOrFail($id);
        return response()->json(['recoveryCenter' => $recoveryCenter]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RecoveryCenter  $recoveryCenter
     * @return \Illuminate\Http\Response
     */
    public function update(CreateRecoveryCenterRequest $request, $id)
    {
        //check if model exists in db
        $recoveryCenter = RecoveryCenter::findOrFail($id);
        //update the validated request to model
        $recoveryCenter->update($request->validated());
        return response()->json([
            'message' => 'RecoveryCenter Updated',
            'RecoveryCenter' => $recoveryCenter
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RecoveryCenter  $recoveryCenter
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $recoveryCenter = RecoveryCenter::findOrFail($id);
        $recoveryCenter->delete();
        return response()->json([
            'success' => true,
        ]);
    }
}
