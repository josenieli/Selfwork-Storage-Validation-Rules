                <div class="card" style="width: 18rem;">
                    <img src="{{ $risultato['img'] }}" class="card-img-top card-img">
                    <div class="card-body">
                        <h5 class="card-title">{{ $risultato['titolo'] }}</h5>
                        <p class="card-text">{{ $risultato['risultato'] }}</p>
                        <a href="{{ route('risultati.detail', ['id' => $risultato['id']]) }}" class="btn btn-primary">Leggi
                            di piu'</a>
                    </div>
                </div>
