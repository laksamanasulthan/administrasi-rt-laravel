<?php

namespace App\Http\Controllers\House;

use App\Models\HousingStatus;
use App\Http\Requests\StoreHousingStatusRequest;
use App\Http\Requests\UpdateHousingStatusRequest;
use App\Http\Controllers\Controller;

class HousingStatusController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHousingStatusRequest $request)
    {
        $body = $request->validated();

        $store = HousingStatus::create([
            'house_id' => $body['house_id'],
            'resident_id' => $body['resident_id'],
            'activity_status' => $body['activity_status'],
            'payment' => $body['payment'],
            'start_date' => $body['start_date'],
            'end_date' => $body['end_date'],
            'address' => $body['addrress']
        ]);

        if (!$store) {
        }

        return redirect()->route('admin.houses.settings')->with('success', 'Data stored successfully.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHousingStatusRequest $request, HousingStatus $id)
    {
        $body = $request->validated();

        $update = $id->update([
            'house_id' => $body['house_id'],
            'resident_id' => $body['resident_id'],
            'activity_status' => $body['activity_status'],
            'payment' => $body['payment'],
            'start_date' => $body['start_date'],
            'end_date' => $body['end_date'],
            'address' => $body['addrress']
        ]);

        if (!$update) {
        }

        return redirect()->route('admin.houses.settings')->with('success', 'Data stored successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HousingStatus $id)
    {
        $delete = $id->delete();

        return redirect()->route('admin.houses.settings')->with('success', 'Data stored successfully.');
    }
}
