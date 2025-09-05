@props(['module', 'model'])

<div class="p-4 xl:w-1/4 md:w-1/2 w-full relative">
    
    <div class="h-full p-6 rounded-lg border-2 border-indigo-500 flex flex-col relative overflow-hidden">
    
        <h1 class="text-xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
    
            <span>{{ Str::limit($model->name, 25) }}</span>
    
        </h1>
    
        <p class="flex items-center text-gray-600 mb-2">
    
            <span
    
                class="w-4 h-4 mr-2 inline-flex items-center justify-center rounded-full flex-shrink-0">
    
                <img src="{{ asset('assets/svgs/check.svg') }}" alt="Check">
    
            </span>Last Login Days Ago: {{ $model->last_login_days_ago }}
    
        </p>
    
        <p class="flex items-center text-gray-600 mb-2">
    
            <span
    
                class="w-4 h-4 mr-2 inline-flex items-center justify-center rounded-full flex-shrink-0">
    
                <img src="{{ asset('assets/svgs/check.svg') }}" alt="Check">
    
            </span>Age Less Than: {{ $model->age_less_than }}
    
        </p>
    
        <p class="flex items-center text-gray-600 mb-2">
    
            <span
    
                class="w-4 h-4 mr-2 inline-flex items-center justify-center rounded-full flex-shrink-0">
    
                <img src="{{ asset('assets/svgs/check.svg') }}" alt="Check">
    
            </span>Age Greater Than: {{ $model->age_greater_than }}
    
        </p>
    
        <p class="flex items-center text-gray-600 mb-2">
    
            <span
    
                class="w-4 h-4 mr-2 inline-flex items-center justify-center rounded-full flex-shrink-0">
    
                <img src="{{ asset('assets/svgs/check.svg') }}" alt="Check">
    
            </span>Income Less Than: {{ $model->income_less_than }}
    
        </p>
    
        <p class="flex items-center text-gray-600 mb-6">
    
            <span
    
                class="w-4 h-4 mr-2 inline-flex items-center justify-center rounded-full flex-shrink-0">
    
                <img src="{{ asset('assets/svgs/check.svg') }}" alt="Check">
    
            </span>Income Greater Than: {{ $model->income_greater_than }}
    
        </p>
    
        <p class="text-xs text-gray-500 mt-3">{{ Str::limit($model->description, 50) }}</p>
    
        <div class="flex justify-end items-center gap-2">
                
            <a href="{{ route($module . '.edit', $model->id) }}" class="text-indigo-500">
                        
                <img src="{{ asset('assets/svgs/edit.svg') }}" alt="Edit">

            </a>

            <form class="mt-1" action="{{ route($module . '.destroy', $model->id) }}" method="post" onSubmit="return confirm('Are you sure you want to delete this {{ $module }}?')">

                @csrf

                @method('DELETE')

                <button type="submit">
                
                    <img src="{{ asset('assets/svgs/delete.svg') }}" alt="Delete">

                </button>

            </form>           
            
        </div>
    
    </div>

</div>