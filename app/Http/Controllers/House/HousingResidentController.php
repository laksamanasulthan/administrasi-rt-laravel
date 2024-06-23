<?php

namespace App\Http\Controllers\House;

use Inertia\Inertia;
use App\Models\HousingResident;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreHousingResidentRequest;
use App\Http\Requests\UpdateHousingResidentRequest;

class HousingResidentController extends Controller
{

    public function store(StoreHousingResidentRequest $request)
    {
        $body = $request->validated();

        $store = HousingResident::create([
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

        return redirect()->route('admin.houses.house.show', $body['house_id'])->with('success', 'Data stored successfully.');
    }

    public function update(UpdateHousingResidentRequest $request, HousingResident $id)
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

        return redirect()->route('admin.houses.house.show', $body['house_id'])->with('success', 'Data updated successfully.');
    }

    public function destroy($houseId, HousingResident $id)
    {
        $delete = $id->delete();

        return redirect()->route('admin.houses.house.show', $houseId)->with('success', 'Data updated successfully.');
    }
}
