<?php

namespace App\Http\Controllers\Resident;

use App\Helper\Response;
use App\Models\Resident;
use App\Http\Requests\StoreResidentRequest;
use App\Http\Requests\UpdateResidentRequest;
use App\Services\FileUploadServices;
use Inertia\Inertia;
use App\Http\Controllers\Controller;

class ResidentController extends Controller
{

    public function __construct(private FileUploadServices $service)
    {
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $getData = Resident::with('residentBelongsToResidentStatus', 'residentBelongsToMarriageStatus')->latest()->get();

        return response()->json($getData);
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
    public function store(StoreResidentRequest $request)
    {
        $body = $request->validated();

        if ($request->hasFile('id_card')) {
            $idCard = $this->service->upload($request->file('id_card'));
        }

        $store = Resident::create([
            'resident_status_id' => $body['resident_status_id'],
            'marriage_status_id' => $body['marriage_status_id'],
            'full_name' => $body['full_name'],
            'id_card' => $idCard
        ]);


        if (!$store) {
            return Response::generate(400);
        }

        return Inertia::render();
    }

    /**
     * Display the specified resource.
     */
    public function show(Resident $resident)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Resident $resident)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateResidentRequest $request, Resident $resident)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resident $resident)
    {
        //
    }
}
