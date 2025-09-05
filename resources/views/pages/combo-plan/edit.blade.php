@extends('layouts.app')

@section('title', 'Update Combo Plan')

@section('content')

    <section class="text-gray-600 body-font relative">
    
        <div class="container px-5 py-24 mx-auto">
    
            <div class="flex flex-col text-center w-full mb-12">
    
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Edit Combo Plan</h1>
    
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Edit the combo plan</p>
    
            </div>
    
            <div class="lg:w-1/2 md:w-2/3 mx-auto">

                <form action="{{ route('combo-plans.update', $comboPlan->id) }}" method="post">

                    @csrf

                    @method('PUT')
    
                    <div class="flex flex-wrap -m-2">
        
                        <div class="p-2 w-1/2">
        
                            <div class="relative">
        
                                <label for="name" class="leading-7 text-sm text-gray-600">Combo Plan Name</label>
        
                                <input type="text" id="name" name="name" value="{{ $comboPlan->name }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        
                            </div>

                            @error('name')

                                <p class="text-red-500 text-sm">{{ $message }}</p>

                            @enderror
        
                        </div>
        
                        <div class="p-2 w-1/2">
        
                            <div class="relative">
        
                                <label for="email" class="leading-7 text-sm text-gray-600">Combo Plan Price</label>
        
                                <input type="number" id="price" name="price" min="0" max="999" step="0.01" value="{{ $comboPlan->price }}"
        
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        
                            </div>

                            @error('price')

                                <p class="text-red-500 text-sm">{{ $message }}</p>

                            @enderror
        
                        </div>
        
                        <div class="p-2 w-full">
        
                            <div class="relative">
        
                                <label for="description" class="leading-7 text-sm text-gray-600">Combo Plan Description</label>
        
                                <textarea id="description" name="description" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out">{{ $comboPlan->description }}</textarea>
        
                            </div>

                            @error('description')

                                <p class="text-red-500 text-sm">{{ $message }}</p>

                            @enderror
        
                        </div>

                        <div class="p-2 w-full">

                            <div class="relative">

                                <label for="plans" class="leading-7 text-sm text-gray-600">Plans</label>
                            
                                <select class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300" id="plans" name="plans[]" class="..." multiple>
                                    
                                    @foreach ($plans as $id => $plan)
                                    
                                        <option value="{{ $id }}" 
                                    
                                            @selected(in_array($id, $comboPlan->plans->pluck('id')->toArray()))>
                                    
                                            {{ $plan }}
                                    
                                        </option>
                                    
                                    @endforeach
                                
                                </select>

                            </div>

                            @error('plans')
                            
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            
                            @enderror

                        </div>

                        <div class="p-2 w-full">

                            <div class="relative">

                                <label for="status" class="leading-7 text-sm text-gray-600">Status</label>
                            
                                <select id="status" name="status" class="w-20 bg-gray-100 bg-opacity-50 rounded border border-gray-300">
                                
                                    @foreach (App\Enums\ComboPlanStatus::cases() as $status)

                                        <option value="{{ $status->value }}" @selected($comboPlan->status == $status->value) >{{ Str::ucfirst(Str::lower($status->name)) }}</option>

                                    @endforeach
                                
                                </select>

                            </div>

                            @error('status')
                            
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            
                            @enderror
                        
                        </div>
        
                        <div class="p-2 w-full">
        
                            <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Update Combo Plan</button>
        
                        </div>
        
                    </div>

                </form>
    
            </div>
    
        </div>
    
    </section>

@endsection