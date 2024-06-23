<?php

namespace App\Http\Controllers\House;

use App\Helper\Response;
use App\Models\House;
use App\Http\Requests\StoreHouseRequest;
use App\Http\Requests\UpdateHouseRequest;
use App\Http\Controllers\Controller;
use App\Models\Resident;
use Inertia\Inertia;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $index =  House::with('houseBelongsToHousingStatus')->latest()->get();
        return Inertia::render('Houses/HouseIndex', ['data' => $index]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHouseRequest $request)
    {
        $body = $request->validated();

        $store = House::create([
            'housing_status_id' => $body['housing_status_id'],
            'no' => $body['no'],
            'area' => $body['area'],
            'address' => $body['addrress']
        ]);

        if (!$store) {
        }

        return redirect()->route('admin.houses.house.index')->with('success', 'Data stored successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(House $id)
    {
        $index = $id->load('houseBelongsToHousingStatus', 'houseHasManyHousingResident');
        $listOfResident = Resident::select('id', 'full_name')->latest()->get();

        return Inertia::render('', [
            'data' => $index,
            'resident' => $listOfResident
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHouseRequest $request, House $id)
    {
        $body = $request->validated();

        $update = $id->update([
            'housing_status_id' => $body['housing_status_id'],
            'no' => $body['no'],
            'area' => $body['area'],
            'address' => $body['addrress']
        ]);

        if (!$update) {
        }

        return redirect()->route('admin.houses.house.index')->with('success', 'Data updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(House $id)
    {
        $delete = $id->delete();

        return redirect()->route('admin.houses.house.index')->with('success', 'Data deleted successfully.');
    }
}
