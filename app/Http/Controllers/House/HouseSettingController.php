<?php

namespace App\Http\Controllers\House;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\HousingStatus;

class HouseSettingController extends Controller
{
    public function __invoke()
    {
        $housingStatus = HousingStatus::latest()->get();

        return Inertia::render('', [
            'housingStatus' => $housingStatus
        ]);
    }
}
