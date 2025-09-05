<?php

namespace App\Http\Controllers;

use App\Models\ComboPlan;
use App\Http\Requests\StoreComboPlanRequest;
use App\Http\Requests\UpdateComboPlanRequest;
use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ComboPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $columns = ComboPlan::getRequiredColumns();

        $comboPlans = ComboPlan::query()->withCount('plans')->select($columns)->filter($request->search)->latest()->paginate(12);
        
        return view('pages.combo-plan.index', compact('comboPlans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $columns = Plan::getRequiredColumnsForSelect();

        $plans = Plan::query()->select($columns)->limit(1000)->pluck('name', 'id');

        return view('pages.combo-plan.create', compact('plans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreComboPlanRequest $request)
    {
        DB::transaction(function () use ($request) {

            $comboPlan = ComboPlan::create([

                'name' => $request->name,

                'description' => $request->description,

                'price' => $request->price,

                'status' => $request->status,
            
            ]);

            $plansIds = $request->plans;

            $attach = [];

            foreach ($plansIds as $index => $planId) {

                $attach[$planId] = [ 'quantity' => 1 ];
            
            }

            $comboPlan->plans()->sync($attach);

        });

        return redirect()->route('combo-plans.index')->with('success', 'Combo plan created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(ComboPlan $comboPlan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ComboPlan $comboPlan)
    {
        $columns = Plan::getRequiredColumnsForSelect();

        $plans = Plan::query()->select($columns)->limit(1000)->pluck('name', 'id');

        return view('pages.combo-plan.edit', compact( 'comboPlan', 'plans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateComboPlanRequest $request, ComboPlan $comboPlan)
    {
        DB::transaction(function () use ($request, $comboPlan) {

            $comboPlan->update([

                'name' => $request->name,

                'description' => $request->description,

                'price' => $request->price,

                'status' => $request->status,

            ]);

            if ($request->filled('plans')) {

                $plansIds = $request->plans ?? [];

                $attach = [];
                
                foreach ($plansIds as $index => $planId) {

                    $qty = 1;

                    $attach[$planId] = [ 'quantity' => $qty ];
                
                }
                
                $comboPlan->plans()->sync($attach);
            }

        });

        return redirect()->route('combo-plans.index')->with('success', 'Combo plan updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ComboPlan $comboPlan)
    {
        $comboPlan->delete();

        return redirect()->route('combo-plans.index')->with('success', 'Combo plan deleted successfully');
    }
}
