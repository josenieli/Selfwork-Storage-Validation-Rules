<x-layout>


<header>
    <div class="container-fluid risultati">
        <div class="row justify-content-center align-items-center">
            <div class="row">
                <h2 class="mb-5 text-white text-center" >Ultimi risultati</h2>
            </div>
            @foreach ($risultati as $risultato)
            <div class="col-12 col-md-3">
                <x-card
                :risultato="$risultato"
                ></x-card>
            </div>
            @endforeach
        </div>
</div>
</header>


</x-layout>
