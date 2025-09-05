@props(['module', 'model'])

<div class="p-4 xl:w-1/4 md:w-1/2 w-full relative">
    
    <div class="h-full p-6 rounded-lg border-2 border-indigo-500 flex flex-col relative overflow-hidden">
    
        <h1 class="text-xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
    
            <span>{{ Str::limit($model->name, 25) }}</span>
    
        </h1>
    
        <p class="flex items-center text-gray-600 mb-2">
    
            <span
    
                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
    
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
    
                    class="w-3 h-3" viewBox="0 0 24 24">
    
                    <path d="M20 6L9 17l-5-5"></path>
    
                </svg>
    
            </span>Last Login Days Ago: {{ $model->last_login_days_ago }}
    
        </p>
    
        <p class="flex items-center text-gray-600 mb-2">
    
            <span
    
                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
    
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
    
                    class="w-3 h-3" viewBox="0 0 24 24">
    
                    <path d="M20 6L9 17l-5-5"></path>
    
                </svg>
    
            </span>Age Less Than: {{ $model->age_less_than }}
    
        </p>
    
        <p class="flex items-center text-gray-600 mb-2">
    
            <span
    
                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
    
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
    
                    class="w-3 h-3" viewBox="0 0 24 24">
    
                    <path d="M20 6L9 17l-5-5"></path>
    
                </svg>
    
            </span>Age Greater Than: {{ $model->age_greater_than }}
    
        </p>
    
        <p class="flex items-center text-gray-600 mb-2">
    
            <span
    
                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
    
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
    
                    class="w-3 h-3" viewBox="0 0 24 24">
    
                    <path d="M20 6L9 17l-5-5"></path>
    
                </svg>
    
            </span>Income Less Than: {{ $model->income_less_than }}
    
        </p>
    
        <p class="flex items-center text-gray-600 mb-6">
    
            <span
    
                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
    
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
    
                    class="w-3 h-3" viewBox="0 0 24 24">
    
                    <path d="M20 6L9 17l-5-5"></path>
    
                </svg>
    
            </span>Income Greater Than: {{ $model->income_greater_than }}
    
        </p>
    
        <p class="text-xs text-gray-500 mt-3">{{ Str::limit($model->description, 50) }}</p>
    
        <div class="flex justify-end items-center gap-2">
                
            <a href="{{ route($module . '.edit', $model->id) }}" class="text-indigo-500">
                        
                <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">

                    <g id="SVGRepo_bgCarrier" stroke-width="0"/>

                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>

                    <g id="SVGRepo_iconCarrier"> <path d="M21.2799 6.40005L11.7399 15.94C10.7899 16.89 7.96987 17.33 7.33987 16.7C6.70987 16.07 7.13987 13.25 8.08987 12.3L17.6399 2.75002C17.8754 2.49308 18.1605 2.28654 18.4781 2.14284C18.7956 1.99914 19.139 1.92124 19.4875 1.9139C19.8359 1.90657 20.1823 1.96991 20.5056 2.10012C20.8289 2.23033 21.1225 2.42473 21.3686 2.67153C21.6147 2.91833 21.8083 3.21243 21.9376 3.53609C22.0669 3.85976 22.1294 4.20626 22.1211 4.55471C22.1128 4.90316 22.0339 5.24635 21.8894 5.5635C21.7448 5.88065 21.5375 6.16524 21.2799 6.40005V6.40005Z" stroke="oklch(51.1% 0.262 276.966)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> <path d="M11 4H6C4.93913 4 3.92178 4.42142 3.17163 5.17157C2.42149 5.92172 2 6.93913 2 8V18C2 19.0609 2.42149 20.0783 3.17163 20.8284C3.92178 21.5786 4.93913 22 6 22H17C19.21 22 20 20.2 20 18V13" stroke="oklch(51.1% 0.262 276.966)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </g>

                </svg>

            </a>

            <form class="mt-1" action="{{ route($module . '.destroy', $model->id) }}" method="post" onSubmit="return confirm('Are you sure you want to delete this {{ $module }}?')">

                @csrf

                @method('DELETE')

                <button type="submit">
                
                    <svg width="20px" height="20px" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#f70808" stroke="#f70808">

                        <g id="SVGRepo_bgCarrier" stroke-width="0"/>

                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>

                        <g id="SVGRepo_iconCarrier">

                        <path d="M960 160h-291.2a160 160 0 0 0-313.6 0H64a32 32 0 0 0 0 64h896a32 32 0 0 0 0-64zM512 96a96 96 0 0 1 90.24 64h-180.48A96 96 0 0 1 512 96zM844.16 290.56a32 32 0 0 0-34.88 6.72A32 32 0 0 0 800 320a32 32 0 1 0 64 0 33.6 33.6 0 0 0-9.28-22.72 32 32 0 0 0-10.56-6.72zM832 416a32 32 0 0 0-32 32v96a32 32 0 0 0 64 0v-96a32 32 0 0 0-32-32zM832 640a32 32 0 0 0-32 32v224a32 32 0 0 1-32 32H256a32 32 0 0 1-32-32V320a32 32 0 0 0-64 0v576a96 96 0 0 0 96 96h512a96 96 0 0 0 96-96v-224a32 32 0 0 0-32-32z" fill="#ff3700"/>

                        <path d="M384 768V352a32 32 0 0 0-64 0v416a32 32 0 0 0 64 0zM544 768V352a32 32 0 0 0-64 0v416a32 32 0 0 0 64 0zM704 768V352a32 32 0 0 0-64 0v416a32 32 0 0 0 64 0z" fill="#ff3700"/>

                        </g>

                    </svg>

                </button>

            </form>           
            
        </div>
    
    </div>

</div>