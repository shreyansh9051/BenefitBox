<?php

namespace Database\Seeders;

use App\Models\ComboPlan;
use App\Models\EligibilityCriteria;
use App\Models\Plan;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        ini_set('memory_limit', '512M'); // Temporarily increase the memory limit for this specific script after seeding the data it will be set back to the original value
        
        DB::disableQueryLog(); // Disable query log for better performance

        
        $this->command?->info('⌛ Seeding 50,000 plans...');

        Plan::factory(50000)->create();

        
        $this->command?->info('⌛ Seeding 15,000 combo plans...');

        ComboPlan::factory(15000)->create();

        
        $this->command?->info('⌛ Seeding 15,000 eligibility criteria...');

        EligibilityCriteria::factory(15000)->create();

        
        $batch = [];

        $now = now();

        $planIds = Plan::limit(100)->pluck('id')->toArray();

        $comboPlanIds = ComboPlan::pluck('id')->toArray();

        $insertedCount = 0;
        
        $maxEntries = 30000;

        foreach ($comboPlanIds as $comboPlanId) {
            
            if ($insertedCount >= $maxEntries) {
            
                break;
            
            }

            $randomPlanIds = Arr::random($planIds, random_int(1, 3));

            foreach ((array) $randomPlanIds as $randomPlanId) {
                
                if ($insertedCount >= $maxEntries) {
                
                    break 2;
                
                }

                $batch[] = [
                
                    'combo_plan_id' => $comboPlanId,
                
                    'plan_id'       => $randomPlanId,
                
                    'quantity'      => 1,
                
                    'created_at'    => $now,
                
                    'updated_at'    => $now,
                
                ];

                $insertedCount++;

                if (count($batch) >= 1000) {
                
                    DB::table('combo_plan_plan')->insert($batch);
                
                    $batch = [];
                }
            }
        }

        if (!empty($batch)) {
        
            DB::table('combo_plan_plan')->insert($batch);
        
        }
        
        $this->command?->info('✅ Seeding completed');
    }   
}
