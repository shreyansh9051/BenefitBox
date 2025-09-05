<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Http\Requests\StorePlanRequest;
use App\Http\Requests\UpdatePlanRequest;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $columns = Plan::getRequiredColumns();

        $plans = Plan::query()->select($columns)->filter($request->search)->latest()->paginate(12);
        
        return view('pages.plan.index', compact('plans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.plan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePlanRequest $request)
    {
        Plan::create([

            'name' => $request->name,

            'description' => $request->description,

            'price' => $request->price,

            'status' => $request->status,

        ]);

        return redirect()->route('plans.index')->with('success', 'Plan created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Plan $plan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Plan $plan)
    {
        return view('pages.plan.edit', compact('plan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePlanRequest $request, Plan $plan)
    {
        $plan->update([

            'name' => $request->name,

            'description' => $request->description,

            'price' => $request->price,

            'status' => $request->status,
        
        ]);

        return redirect()->route('plans.index')->with('success', 'Plan updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Plan $plan)
    {
        $plan->delete();

        return redirect()->route('plans.index')->with('success', 'Plan deleted successfully');
    }
}
