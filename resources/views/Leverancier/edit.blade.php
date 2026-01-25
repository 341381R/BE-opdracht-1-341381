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

            <form method="POST" action="{{ route('Leverancier.update', $leverancierInfo->Id) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="InputNaam" class="form-label">Naam</label>
                <input name="naam" type="text" class="form-control" id="InputNaam" aria-describedby="naamHelp" 
                    value="{{ old('naam', $leverancierInfo->Naam) }}">
            </div>
            <div class="mb-3">
                <label for="InputContactPersoon" class="form-label">ContactPersoon</label>
                <input name="ContactPersoon" type="text" class="form-control" id="InputContactPersoon" aria-describedby="contactPersoonHelp"
                    value="{{ old('naam', $leverancierInfo->ContactPersoon) }}">
            </div>
            <div class="mb-3">
                <label for="InputLeveranciernummer" class="form-label">Leveranciernummer</label>
                <input name="Leveranciernummer" type="text" class="form-control" id="InputLeveranciernummer" aria-describedby="LeveranciernummerHelp"
                    value="{{ old('naam', $leverancierInfo->Leveranciernummer) }}">
            </div>
            <div class="mb-3">
                <label for="InputMobiel" class="form-label">Mobiel</label>
                <input name="Mobiel" type="text" class="form-control" id="InputMobiel" aria-describedby="MobielHelp"
                    value="{{ old('naam', $leverancierInfo->Mobiel) }}">
            </div>
            <div class="mb-3">
                <label for="InputStraatnaam" class="form-label">Straatnaam</label>
                <input name="Straatnaam" type="text" class="form-control" id="InputStraatnaam" aria-describedby="StraatnaamHelp"
                    value="{{ old('naam', $leverancierInfo->Straatnaam) }}">
            </div>
            <div class="mb-3">
                <label for="InputHuisnaam" class="form-label">Huisnaam</label>
                <input name="Huisnaam" type="text" class="form-control" id="InputHuisnaam" aria-describedby="HuisnaamHelp"
                    value="{{ old('naam', $leverancierInfo->Huisnaam) }}">
            </div>
            <div class="mb-3">
                <label for="InputPostcode" class="form-label">Postcode</label>
                <input name="Postcode" type="text" class="form-control" id="InputPostcode" aria-describedby="PostcodeHelp"
                    value="{{ old('naam', $leverancierInfo->Postcode) }}">
            </div>
            <div class="mb-3">
                <label for="InputStad" class="form-label">Stad</label>
                <input name="Stad" type="text" class="form-control" id="InputStad" aria-describedby="StadHelp"
                    value="{{ old('naam', $leverancierInfo->Stad) }}">
            </div>

            <button type="submit" class="btn btn-primary">Opslaan</button>
            <a href="{{ route('Leverancier.index') }}" class="btn btn-secondary">Annuleren</a>
        </form>
        </div>
    </div>
</body>
</html>