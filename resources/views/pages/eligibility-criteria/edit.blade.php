@extends('layouts.app')

@section('title', 'Update Eligibility Criteria')

@section('content')

    <section class="text-gray-600 body-font relative">
    
        <div class="container px-5 py-24 mx-auto">
    
            <div class="flex flex-col text-center w-full mb-12">
    
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Update Eligibility Criteria</h1>
    
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Update eligibility criteria</p>
    
            </div>
    
            <div class="lg:w-1/2 md:w-2/3 mx-auto">

                <form action="{{ route('eligibility-criteria.update', $eligibilityCriteria->id) }}" method="post">

                    @csrf

                    @method('PUT')
    
                    <div class="flex flex-wrap -m-2">
        
                        <div class="p-2 w-1/2">
        
                            <div class="relative">
        
                                <label for="name" class="leading-7 text-sm text-gray-600">Eligibility Criteria Name</label>
        
                                <input type="text" id="name" name="name" value="{{ $eligibilityCriteria->name }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        
                            </div>

                            @error('name')

                                <p class="text-red-500 text-sm">{{ $message }}</p>

                            @enderror
        
                        </div>

                        <div class="p-2 w-1/2">
        
                            <div class="relative">
        
                                <label for="name" class="leading-7 text-sm text-gray-600">Eligibility Criteria Last Login Days Ago</label>
        
                                <input type="number" min="0" max="365" step="1" id="last_login_days_ago" name="last_login_days_ago" value="{{ $eligibilityCriteria->last_login_days_ago }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        
                            </div>

                            @error('last_login_days_ago')

                                <p class="text-red-500 text-sm">{{ $message }}</p>

                            @enderror
        
                        </div>
        
                        <div class="p-2 w-full">
        
                            <div class="relative">
        
                                <label for="description" class="leading-7 text-sm text-gray-600">Eligibility Criteria Description</label>
        
                                <textarea id="description" name="description" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out">{{ $eligibilityCriteria->description }}</textarea>
        
                            </div>

                            @error('description')

                                <p class="text-red-500 text-sm">{{ $message }}</p>

                            @enderror
        
                        </div>

                        <div class="p-2 w-1/2">
        
                            <div class="relative">
        
                                <label for="name" class="leading-7 text-sm text-gray-600">Eligibility Criteria Age Less Than</label>
        
                                <input type="umber" min="0" max="100" step="1" id="age_less_than" name="age_less_than" value="{{ $eligibilityCriteria->age_less_than }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        
                            </div>

                            @error('age_less_than')

                                <p class="text-red-500 text-sm">{{ $message }}</p>

                            @enderror
        
                        </div>

                        <div class="p-2 w-1/2">
        
                            <div class="relative">
        
                                <label for="name" class="leading-7 text-sm text-gray-600">Eligibility Criteria Age Greater Than</label>
        
                                <input type="umber" min="0" max="100" step="1" id="age_greater_than" name="age_greater_than" value="{{ $eligibilityCriteria->age_greater_than }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        
                            </div>

                            @error('age_greater_than')

                                <p class="text-red-500 text-sm">{{ $message }}</p>

                            @enderror
        
                        </div>

                        <div class="p-2 w-1/2">
        
                            <div class="relative">
        
                                <label for="name" class="leading-7 text-sm text-gray-600">Eligibility Criteria Income Less Than</label>
        
                                <input type="umber" min="0" max="999" step="0.01" id="income_less_than" name="income_less_than" value="{{ $eligibilityCriteria->income_less_than }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        
                            </div>

                            @error('income_less_than')

                                <p class="text-red-500 text-sm">{{ $message }}</p>

                            @enderror
        
                        </div>

                        <div class="p-2 w-1/2">
        
                            <div class="relative">
        
                                <label for="name" class="leading-7 text-sm text-gray-600">Eligibility Criteria Income Greater Than</label>
        
                                <input type="umber" min="0" max="999" step="0.01" id="income_greater_than" name="income_greater_than" value="{{ $eligibilityCriteria->income_greater_than }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        
                            </div>

                            @error('income_greater_than')

                                <p class="text-red-500 text-sm">{{ $message }}</p>

                            @enderror
        
                        </div>

                        <div class="p-2 w-full">

                            <div class="relative">

                                <label for="status" class="leading-7 text-sm text-gray-600">Status</label>
                            
                                <select id="status" name="status" class="w-20 bg-gray-100 bg-opacity-50 rounded border border-gray-300">
                                
                                    @foreach (App\Enums\EligibilityCriteriaStatus::cases() as $status)

                                        <option value="{{ $status->value }}" @selected($eligibilityCriteria->status == $status->value)>{{ Str::ucfirst(Str::lower($status->name)) }}</option>

                                    @endforeach
                                
                                </select>

                            </div>

                            @error('status')
                            
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            
                            @enderror
                        
                        </div>
        
                        <div class="p-2 w-full">
        
                            <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Create Eligibility Criteria</button>
        
                        </div>
        
                    </div>

                </form>
    
            </div>
    
        </div>
    
    </section>

@endsection