@vite(['resources/css/app.css', 'resources/js/app.js'])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container d-flex justify-content-center">
        <div class="col-md-8">
            <h2>{{ $title  }}</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $err)
                        <li>{{ $err }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('Leverancier.update', $leverancier->Id) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="InputNaam" class="form-label">Naam</label>
                <input name="naam" type="text" class="form-control" id="InputNaam" aria-describedby="naamHelp" 
                    value="{{ old('naam', $leverancier->Naam) }}">
            </div>
            <div class="mb-3">
                <label for="InputContactPersoon" class="form-label">ContactPersoon</label>
                <input name="ContactPersoon" type="text" class="form-control" id="InputContactPersoon" aria-describedby="contactPersoonHelp"
                    value="{{ old('ContactPersoon', $leverancier->ContactPersoon) }}">
            </div>
            <div class="mb-3">
                <label for="InputLeverancierNummer" class="form-label">LeverancierNummer</label>
                <input name="LeverancierNummer" type="text" class="form-control" id="InputLeverancierNummer" aria-describedby="LeverancierNummerHelp"
                    value="{{ old('LeverancierNummer', $leverancier->LeverancierNummer) }}">
            </div>
            <div class="mb-3">
                <label for="InputMobiel" class="form-label">Mobiel</label>
                <input name="Mobiel" type="text" class="form-control" id="InputMobiel" aria-describedby="MobielHelp"
                    value="{{ old('Mobiel', $leverancier->Mobiel) }}">
            </div>
            <div class="mb-3">
                <label for="InputStraatnaam" class="form-label">Straatnaam</label>
                <input name="Straatnaam" type="text" class="form-control" id="InputStraatnaam" aria-describedby="StraatnaamHelp"
                    value="{{ old('Straatnaam', $leverancier->Straat) }}">
            </div>
            <div class="mb-3">
                <label for="InputHuisnummer" class="form-label">Huisnummer</label>
                <input name="Huisnummer" type="text" class="form-control" id="InputHuisnummer" aria-describedby="HuisnummerHelp"
                    value="{{ old('Huisnummer', $leverancier->Huisnummer) }}">
            </div>
            <div class="mb-3">
                <label for="InputPostcode" class="form-label">Postcode</label>
                <input name="Postcode" type="text" class="form-control" id="InputPostcode" aria-describedby="PostcodeHelp"
                    value="{{ old('Postcode', $leverancier->Postcode) }}">
            </div>
            <div class="mb-3">
                <label for="InputStad" class="form-label">Stad</label>
                <input name="Stad" type="text" class="form-control" id="InputStad" aria-describedby="StadHelp"
                    value="{{ old('Stad', $leverancier->Stad) }}">
            </div>

            <button type="submit" class="btn btn-primary">Opslaan</button>
            <a href="{{ route('Leverancier.index') }}" class="btn btn-secondary">Annuleren</a>
        </form>
        </div>
    </div>
</body>
</html>