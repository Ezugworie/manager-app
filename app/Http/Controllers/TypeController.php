<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;
use App\Http\Requests\CreateSizeOrTypeRequest;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //fetch all types
        return response()->json([
            'type' => Type::get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateSizeOrTypeRequest $request)
    {
        //validate request data and save to db
        $type = Type::create($request->validated());
        return response()->json([
            'message' => 'Type Created',
            'Type' => $type
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function getType(Request $id)
    {
        //find type from DB and return
        $type = Type::findOrFail($id);
        return response()->json(['type' => $type]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function update(CreateSizeOrTypeRequest $request, $id)
    {
        //check if model exists in db
        $type = Type::findOrFail($id);
        //update the validated request to model
        $type->update($request->validated());
        return response()->json([
            'message' => 'Type Updated',
            'Type' => $type
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $type = Type::findOrFail($id);
        $type->delete();
        return response()->json([
            'success' => true,
        ]);
    }
}
