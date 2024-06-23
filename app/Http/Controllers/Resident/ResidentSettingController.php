<?php

namespace App\Http\Controllers\Resident;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\MarriageStatus;
use App\Models\ResidentStatus;
use App\Http\Controllers\Controller;

class ResidentSettingController extends Controller
{
    public function __invoke()
    {
        $listOfResidentStatus = ResidentStatus::latest()->get();
        $listOfMarriageStatus = MarriageStatus::latest()->get();

        return Inertia::render('', [
            'residentStat' => $listOfResidentStatus,
            'marriageStat' => $listOfMarriageStatus
        ]);
    }
}
