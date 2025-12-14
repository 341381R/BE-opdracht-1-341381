@vite(['resources/css/app.css', 'resources/js/app.js']);
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet"/>
        <title>Details</title>
    </head>
    <body>
        <div class="container d-flex justify-content-center">
            <div class="col-md-8">
                <h2 class="mb-3">{{ $title }}</h2>
                <dl class="row">
                    <h4 class="col-sm-12">Naam leverancier: {{ $leverancier[0]->LeverancierNaam}}</h4>
                    <h4 class="col-sm-12 ">Contactpersoon: {{ $leverancier[0]->ContactPersoon}}</h4>
                    <h4 class="col-sm-12 ">Leverancier nr: {{ $leverancier[0]->LeverancierNummer}}</h4>
                    <h4 class="col-sm-12 ">Mobiel: {{ $leverancier[0]->Mobiel}}</h4>
                </dl>
                <form method="POST" action="{{ route('Allergenen.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="InputAantal" class="form-label">Aantal producteenheden</label>
                        <input name="aantal" type="text" class="form-control" id="Inputaantal" aria-describedby="aantalHelp">
                    </div>
                    <div class="mb-3">
                        <label for="InputOmschrijving" class="form-label">DatumEerstVolgendeLevering</label>
                        <input name="omschrijving" type="date" class="form-control" id="InputOmschrijving" aria-describedby="omschrijvingHelp">
                    </div>

                    <button type="submit" class="btn btn-primary">Sla op</button>
                </form>

                <div class="mt-3 d-flex">
                    <a href="{{ route('Leverancier.index') }}" class="btn btn-secondary btn-sm ms-auto">Terug</a>
                    <a href="{{ route('home') }}" class="btn btn-secondary btn-sm ms-1">Home</a>
                </div>
            </div>
        </div>
    </body>
</html>