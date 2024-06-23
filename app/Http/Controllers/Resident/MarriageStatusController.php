<?php

namespace App\Http\Controllers\Resident;

use App\Models\MarriageStatus;
use App\Http\Requests\StoreMarriageStatusRequest;
use App\Http\Requests\UpdateMarriageStatusRequest;
use App\Http\Controllers\Controller;


class MarriageStatusController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMarriageStatusRequest $request)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMarriageStatusRequest $request, MarriageStatus $id)
    {
        $body = $request->validated();

        $update = $id->update([
            'status' => $body['status'],
        ]);

        if (!$update) {
        }

        return redirect()->route('admin.residents.settings')->with('success', 'Data updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MarriageStatus $id)
    {
        //
    }
}
