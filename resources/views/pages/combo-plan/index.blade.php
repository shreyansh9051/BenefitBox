@extends('layouts.app')

@section('title', 'Combo Plans')

@section('content')

    <section class="text-gray-600 body-font">

        <div class="container px-10 py-5 mx-auto flex items-center md:flex-row flex-col">
        
            <div class="flex flex-col md:pr-10 md:mb-0 mb-6 pr-0 w-full md:w-auto md:text-left text-center">
        
                <h2 class="text-xs text-indigo-500 tracking-widest font-medium title-font mb-1">Combo Plans</h2>
            
                <h1 class="md:text-3xl text-2xl font-medium title-font text-gray-900">List of all combo plans</h1>
        
            </div>
        
            <div class="flex md:ml-auto md:mr-0 mx-auto items-center flex-shrink-0 space-x-4">
        
                <a href="{{ route('combo-plans.create') }}" class="bg-gray-100 inline-flex py-3 px-5 rounded-lg items-center hover:bg-gray-200 focus:outline-none">
            
                    <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#5c5757">
            
                        <g id="SVGRepo_bgCarrier" stroke-width="0"/>
            
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
            
                        <g id="SVGRepo_iconCarrier"> <path d="M15 12L12 12M12 12L9 12M12 12L12 9M12 12L12 15" stroke="#727379" stroke-width="1.5" stroke-linecap="round"/> <path d="M22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C21.5093 4.43821 21.8356 5.80655 21.9449 8" stroke="#727379" stroke-width="1.5" stroke-linecap="round"/> </g>
            
                    </svg>
            
                    <span class="ml-4 flex items-start flex-col leading-none">
            
                    <span class="text-xs text-gray-600 mb-1">Create</span>
            
                    <span class="title-font font-medium">New Combo Plan</span>
            
                    </span>
            
                </a>
        
            </div>
        
        </div>
    
        <div class="container px-5 py-5 mx-auto">
    
            <div class="flex flex-wrap w-full mb-20">
    
                <div class="flex flex-wrap -m-4">
    
                    @foreach ($comboPlans as $comboPlan)
    
                        @include('components.card', [
                            
                            'module' => 'combo-plans',
                            
                            'model' => $comboPlan,

                            'image' => $comboPlan->name,
                            
                        ])
    
                    @endforeach
    
                </div>
    
            </div>
    
    </section>
    
    <section class="text-gray-600 body-font">
        
        <div class="container px-5 py-5 mx-auto">
        
            {{ $comboPlans->links() }}
        
        </div>
    
    </section>

@endsection