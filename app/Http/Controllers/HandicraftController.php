<?php

namespace App\Http\Controllers;

use App\Models\Handicraft;
use Illuminate\Http\Request;
use App\Http\Resources\HandicraftResource;

class HandicraftController extends Controller
{
    /**
     * Return all of Scrap Category
     *
     * @return \Illuminate\Http\Response
     */
    public function getAll()
    {
        return HandicraftResource::collection(Handicraft::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Handicraft  $handicraft
     * @return \Illuminate\Http\Response
     */
    public function getById(Handicraft $handiCraft)
    {
        return new HandicraftResource($handiCraft);
    }

    /**
     * Return all of Handicraft.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.handicrafts.index', [
            'title' => 'Handicrafts',
            'handicrafts' => Handicraft::all()
        ]);
    }

    /**
     * Store a newly created Handicraft.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Handicraft  $handicraft
     * @return \Illuminate\Http\Response
     */
    public function show(Handicraft $handiCraft, $slug)
    {
        $handicraft = $handiCraft::where('slug', $slug)->get()->first();
        return view('admin.handicrafts.show', [
            'title' => 'Detail',
            'handicraft' => $handicraft,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Handicraft  $handicraft
     * @return \Illuminate\Http\Response
     */
    public function edit(Handicraft $handiCraft)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ScrapCategory  $scrapCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Handicraft $handiCraft)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Handicraft  $handicraft
     * @return \Illuminate\Http\Response
     */
    public function destroy(Handicraft $handiCraft)
    {
        //
    }
}
