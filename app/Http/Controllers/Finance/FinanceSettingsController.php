<?php

namespace App\Http\Controllers\Finance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class FinanceSettingsController extends Controller
{
    public function __invoke()
    {
        return Inertia::render('Finances/FinanceSettings');
    }
}
