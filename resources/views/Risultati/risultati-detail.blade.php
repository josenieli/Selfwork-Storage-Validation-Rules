<x-layout>


<header>
    <div class="container-fluid risultati">
        <div class="row justify-content-center align-items-center">
            <div class="row">
                <h2 class="mb-5 text-white text-center" >Risultato {{$risultato['titolo']}}</h2>
            </div>
            <div class="col-12 col-md-6 text-white d-flex flex-column justify-content-center align-items-center">
                <h4>{{$risultato['titolo']}}</h4>
                
                <h5>{{$risultato['risultato']}}</h5>
                <h6>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus laudantium ratione nesciunt mollitia neque recusandae voluptate nemo consequatur, ipsam, at nobis deserunt rerum similique? Numquam qui cupiditate rem iure maiores.</h6>
            </div>
            <div class="col-12 col-md-6 d-flex justify-content-center align-items-center"> <img src="{{$risultato['img']}}" alt=""> </div>
        </div>
    </div>
</header>


</x-layout>