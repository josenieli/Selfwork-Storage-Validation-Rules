<x-layout>
    <div class="container-fluid">
        <div class="row">
            <h2>Inserisci il risultato attesso</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form method="POST" action="{{ route('risultati.submit') }}" enctype="multipart/form-data">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @csrf
                    <div class="mb-3 text-white">
                        <label for="titolo" class="form-label">Titolo:</label>
                        <input type="text" name="titolo" class="form-control" value="{{ old('titolo') }}" id="titolo"
                            aria-describedby="titoleHelp">
                        <label for="marcatori" class="form-label">Marcatori:</label>
                        <input type="text" value="{{ old('marcatori') }}" name="marcatori" class="form-control" id="marcatori"
                            aria-describedby="marcatoriHelp">
                        <label for="gioranta" class="form-label">gioranta di campionato:</label>
                        <input type="text" value="{{ old('giornata') }}" name="giornata" class="form-control" id="gioranta"
                            aria-describedby="giorantaHelp">
                        <label for="img" class="form-label">Inserisci un immagine</label>
                        <input type="file" name="img" class="form-control" id="img"
                            aria-describedby="imgHelp">
                        <label for="riassunto" class="form-label">riassunto partita:</label>
                        <textarea name="riassunto" id="riassunto" cols="30" rows="10" class="form-control">{{ old('riassunto') }}</textarea>
                        <button type="submit" class="btn btn-primary">Prova ad indovinare il risultato</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
