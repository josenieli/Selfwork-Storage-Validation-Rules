<x-layout>

<header class="height">
    <div class="imagine d-flex justify-content-center align-items-center">
    <h1 class="text-white text-center">Blog calcio</h1>
    @if (session()->has('successMessage'))
        <div class="alert alert-success">
            {{session('successMessage')}}
    @endif
        </div>
    </div>
</header>
</x-layout>