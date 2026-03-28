                <div class="card" style="width: 18rem;">
                    @if (!$risultato->img)
                        <img src="https://picsum.photos/200" class="card-img-top card-img">
                    @else
                        <img src={{ Storage::url($risultato->img) }} class="card-img-top card-img">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $risultato['titolo'] }}</h5>
                        <p class="card-text">{{ $risultato['marcatori'] }}</p>
                        <p class="card-text">{{ $risultato['giornata'] }}</p>
                        <p class="card-text">{{ $risultato['riassunto'] }}</p>
                    </div>
                </div>
