<?php

namespace App\Http\Controllers;

use App\Models\Size;
use Illuminate\Http\Request;
use App\Http\Requests\CreateSizeOrTypeRequest;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //fetch all sizes
        return response()->json([
            'size' => Size::get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\CreateSizeOrTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateSizeOrTypeRequest $request)
    {
        //validate request data and save to db
        $size = Size::create($request->validated());
        return response()->json([
            'message' => 'Size Created',
            'Size' => $size
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function getSize($id)
    {
        //find size from DB and return
        $size = Size::findOrFail($id);
        return response()->json(['size' => $size]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\CreateSizeOrTypeRequest  $request
     * @param  \App\Models\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function update(CreateSizeOrTypeRequest $request, $id)
    {
        //check if model exists in db
        $size = Size::findOrFail($id);
        //update the validated request to model
        $size->update($request->validated());
        return response()->json([
            'message' => 'Size Updated',
            'Size' => $size
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $size = Size::findOrFail($id);
        $size->delete();
        return response()->json([
            'success' => true,
        ]);
    }
}
