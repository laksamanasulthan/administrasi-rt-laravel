<?php

namespace App\Http\Controllers;

use App\Models\MarriageStatus;
use App\Http\Requests\StoreMarriageStatusRequest;
use App\Http\Requests\UpdateMarriageStatusRequest;

class MarriageStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMarriageStatusRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(MarriageStatus $marriageStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MarriageStatus $marriageStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMarriageStatusRequest $request, MarriageStatus $marriageStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MarriageStatus $marriageStatus)
    {
        //
    }
}
