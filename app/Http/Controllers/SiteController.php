<?php

namespace App\Http\Controllers;

use App\Models\Site;
use Illuminate\Http\Request;
use App\Http\Requests\CreateSiteRequest;
use App\Http\Requests\UpdateSiteRequest;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //fetch all sites
        return response()->json([
            'site' => Site::get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\CreateSiteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateSiteRequest $request)
    {
        //validate request data and save to db
        $site = Site::create($request->validated());
        return response()->json([
            'message' => 'Site Created',
            'Site' => $site
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function getSite($id)
    {
        //find site from DB and return
        $site = Site::findOrFail($id);
        return response()->json(['site' => $site]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function update(CreateSiteRequest $request, $id)
    {
        //check if model exists in db
        $site = Site::findOrFail($id);

        //update the validated request to model
        $site->update($request->validated());
        return response()->json([
            'message' => 'Site Updated',
            'Site' => $site
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $site = Site::findOrFail($id);
        $site->delete();
        return response()->json([
            'success' => 'Site Deleted',
        ]);
    }
}
