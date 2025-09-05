<?php

namespace App\Http\Controllers;

use App\Models\ComboPlan;
use App\Models\EligibilityCriteria;
use App\Models\Plan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $plansCount = Plan::count();

        $comboPlansCount = ComboPlan::count();

        $eligibilityCriteriaCount = EligibilityCriteria::count();

        return view('pages.dashboard', compact('plansCount', 'comboPlansCount', 'eligibilityCriteriaCount'));
    }
}
