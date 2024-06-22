<?php

namespace App\Http\Controllers;

use App\Models\HousingResident;
use App\Http\Requests\StoreHousingResidentRequest;
use App\Http\Requests\UpdateHousingResidentRequest;

class HousingResidentController extends Controller
{

    public function showByHouseId($houseId)
    {
    }

    /**
     * Display the specified resource.
     */
    public function showById(HousingResident $id)
    {
        //
    }


    public function updateStatus(HousingResident $id)
    {
        //
    }
}
