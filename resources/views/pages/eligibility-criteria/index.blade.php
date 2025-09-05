@extends('layouts.app')

@section('title', 'Eligibility Criteria')

@section('content')

    <div class="container px-10 py-5 mx-auto flex items-center md:flex-row flex-col">
    
        <div class="flex flex-col md:pr-10 md:mb-0 mb-6 pr-0 w-full md:w-auto md:text-left text-center">
        
            <h2 class="text-xs text-indigo-500 tracking-widest font-medium title-font mb-1">Eligibility Criteria</h2>
        
            <h1 class="md:text-3xl text-2xl font-medium title-font text-gray-900">List of all eligibility criteria</h1>
    
        </div>
    
        <div class="flex md:ml-auto md:mr-0 mx-auto items-center flex-shrink-0 space-x-4">
    
            <a href="{{ route('eligibility-criteria.create') }}" class="bg-gray-100 inline-flex py-3 px-5 rounded-lg items-center hover:bg-gray-200 focus:outline-none">
        
                <img src="{{ asset('assets/svgs/plus.svg') }}" alt="Plus">
        
                <span class="ml-4 flex items-start flex-col leading-none">
        
                <span class="text-xs text-gray-600 mb-1">Create</span>
        
                <span class="title-font font-medium">New Eligibility Criteria</span>
        
                </span>
        
            </a>
    
        </div>
    
    </div>

    <section class="text-gray-600 body-font overflow-hidden">
    
        <div class="container px-5 py-5 mx-auto">
    
            <div class="flex flex-wrap -m-4">
    
                @foreach ($eligibilityCriterias as $eligibilityCriteria)
    
                    @include('components.checklist', [
    
                        'module' => 'eligibility-criteria',
    
                        'model' => $eligibilityCriteria
    
                    ])
    
                @endforeach
    
            </div>
    
        </div>
    
    </section>

    <section class="text-gray-600 body-font">
        
        <div class="container px-5 py-5 mx-auto">
        
            {{ $eligibilityCriterias->links() }}
        
        </div>
    
    </section>

@endsection