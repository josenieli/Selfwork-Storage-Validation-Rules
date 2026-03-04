<x-layout>


<header>
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-6 p-5">
            <h2 class="text-white text-center">Chi siamo</h2>
            <p class="text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit iure culpa nostrum inventore atque aspernatur eligendi minus minima id aliquam itaque tenetur labore maxime vitae, reiciendis error nesciunt non provident.</p>
            </div>
            <div class="col-6 text-center p-5">
                <img src="https://picsum.photos/200" >
            </div>
        </div>
</div>
</header>

<section class= "pt-5">
    <div class="container pt-5">
        <div class="row">
            @foreach ($users as $user)
            <div class="col-12 col-md-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$user['name']}} {{$user['surname']}}</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">{{$user['role']}}</h6>
                        <a href="{{route('chisiamodetail', ['name'=>$user['name']])}}" class="card-link">Approfondisci</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

</x-layout>