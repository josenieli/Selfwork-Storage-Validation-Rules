<x-layout>

<header>
    <div class="container pt-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6 col-12">
                <h2 class= "text-white text-center">{{$user['name']}} {{$user['surname']}}</h2>
                <p class= "text-white text-center">{{$user['role']}}</p>
            </div>
        </div>
    </div>
</header>
</x-layout>