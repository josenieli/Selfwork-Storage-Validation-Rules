<x-layout>
    <div class="container-fluid">
        <div class="row">
            <h2>Inserisci il risultato attesso</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form method="POST" action="{{route('risultati.submit')}}">
                    @csrf
                    <div class="mb-3 text-white">
                        <label for="titolo" class="form-label">Titolo:</label>
                        <input type="text" name="titolo" class="form-control" id="titolo" aria-describedby="titoleHelp">
                        <label for="marcatori" class="form-label">Marcatori:</label>
                        <input type="text" name="marcatori" class="form-control" id="marcatori" aria-describedby="marcatoriHelp">
                        <label for="gioranta" class="form-label">gioranta di campionato:</label>
                        <input type="text" name="giornata" class="form-control" id="gioranta" aria-describedby="giorantaHelp">
                        <label for="riassunto"  class="form-label">riassunto partita:</label>
                        <textarea name="riassunto" id="" cols="30" rows="10" class="form-control"></textarea>
                    <button type="submit" class="btn btn-primary">Prova ad indovinare il risultato</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
