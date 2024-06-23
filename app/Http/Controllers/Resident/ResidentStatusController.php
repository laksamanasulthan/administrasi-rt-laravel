<?php

namespace App\Http\Controllers\Resident;

use App\Models\ResidentStatus;
use App\Http\Requests\StoreResidentStatusRequest;
use App\Http\Requests\UpdateResidentStatusRequest;
use App\Http\Controllers\Controller;

class ResidentStatusController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreResidentStatusRequest $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateResidentStatusRequest $request, ResidentStatus $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ResidentStatus $id)
    {
        //
    }
}
