<?php

namespace App\Http\Controllers;

use App\Models\ContributionCategory;
use App\Http\Requests\StoreContributionCategoryRequest;
use App\Http\Requests\UpdateContributionCategoryRequest;
use Inertia\Inertia;

class ContributionCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $getAllData = ContributionCategory::latest()->get();

        return Inertia::render('', ['listOfContributionCategory' => $getAllData]);
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
    public function store(StoreContributionCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ContributionCategory $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContributionCategory $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContributionCategoryRequest $request, ContributionCategory $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContributionCategory $id)
    {
        //
    }
}
