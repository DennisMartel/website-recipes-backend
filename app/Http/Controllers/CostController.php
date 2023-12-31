<?php

namespace App\Http\Controllers;

use App\Models\Cost;
use App\Http\Requests\StoreCostRequest;
use App\Http\Requests\UpdateCostRequest;

class CostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $costs = Cost::withCount("recipes")->get();
        return response()->json($costs);
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
    public function store(StoreCostRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Cost $cost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cost $cost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCostRequest $request, Cost $cost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cost $cost)
    {
        //
    }
}
