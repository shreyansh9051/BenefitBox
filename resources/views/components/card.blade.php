@props(['module', 'model', 'image' => false])

<div class="xl:w-1/4 md:w-1/2 p-4 ">
    
    <div class="bg-gray-100 p-6 rounded-lg h-90 relative">
    
        <img class="h-40 rounded w-full object-cover object-center mb-6" src="{{ "https://placehold.co/600x400?text=" . $image }}" alt="{{ $model->name }}">
    
        <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">{{ Str::limit($model->name, 30) }}</h3>
    
        <h2 class="text-lg text-gray-900 font-medium title-font mb-4">{{ \App\Helpers\Helper::formatPrice($model->price) }}</h2>
    
        <p class="leading-relaxed text-base">{{ Str::limit($model->description, 50) }}</p>

        <div class="flex justify-end items-center gap-2 absolute bottom-6 right-6">
            
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