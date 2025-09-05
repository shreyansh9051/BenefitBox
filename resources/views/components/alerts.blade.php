@if (session('success'))

    <div class="container px-5 py-5 mx-auto">

        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50" role="alert">
        
            {{ session('success') }}
        
        </div>

    </div>

@endif

@if (session('error'))

    <div class="container px-5 py-5 mx-auto">

        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50" role="alert">
        
            {{ session('error') }}
        
        </div>

    </div>

@endif