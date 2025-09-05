<?php

namespace App\Http\Controllers;

use App\Models\EligibilityCriteria;
use App\Http\Requests\StoreEligibilityCriteriaRequest;
use App\Http\Requests\UpdateEligibilityCriteriaRequest;
use Illuminate\Http\Request;

class EligibilityCriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $columns = EligibilityCriteria::getRequiredColumns();

        $eligibilityCriterias = EligibilityCriteria::query()->select($columns)->filter($request->search)->latest()->paginate(12);
        
        return view('pages.eligibility-criteria.index', compact('eligibilityCriterias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.eligibility-criteria.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEligibilityCriteriaRequest $request)
    {
        EligibilityCriteria::create([

            'name' => $request->name,

            'description' => $request->description,
            
            'age_less_than' => $request->age_less_than,

            'age_greater_than' => $request->age_greater_than,

            'last_login_days_ago' => $request->last_login_days_ago,

            'income_less_than' => $request->income_less_than,

            'income_greater_than' => $request->income_greater_than,

            'status' => $request->status,
        
        ]);

        return redirect()->route('eligibility-criteria.index')->with('success', 'Eligibility criteria created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(EligibilityCriteria $eligibilityCriteria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EligibilityCriteria $eligibilityCriteria)
    {
        return view('pages.eligibility-criteria.edit', compact('eligibilityCriteria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEligibilityCriteriaRequest $request, EligibilityCriteria $eligibilityCriteria)
    {
        $eligibilityCriteria->update([

            'name' => $request->name,

            'description' => $request->description,
            
            'age_less_than' => $request->age_less_than,

            'age_greater_than' => $request->age_greater_than,

            'last_login_days_ago' => $request->last_login_days_ago,

            'income_less_than' => $request->income_less_than,
        
        ]);

        return redirect()->route('eligibility-criteria.index')->with('success', 'Eligibility criteria updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EligibilityCriteria $eligibilityCriteria)
    {
        $eligibilityCriteria->delete();

        return redirect()->route('eligibility-criteria.index')->with('success', 'Eligibility criteria deleted successfully');
    }
}
