@vite(['resources/css/app.css', 'resources/js/app.js'])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Allergenen pagina</title>
</head>
<body>
    <div class="container">

        <h1>{{ $title }}</h1>
    
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }} 
                <button type="button" class="btn-close" aria-label="sluiten" data-bs-dismiss="alert"></button>
            </div>
            <meta http-equiv="refresh" content="3;url={{ route('Allergenen.index') }}">
            @endif        
        
        <div class="mt-3">
            <form action="{{ route('Allergenen.categorie') }}" method="POST">
                @csrf
                @method('GET')
                Allergeen:
                <select name="Allergeen">
                    <option value="" disabled>
                        Selecteer allergeen
                    </option>
                    @foreach ($allergeenNamen as $allergeen)
                        <option value="{{ $allergeen->AllergeenNaam }}">{{ $allergeen->AllergeenNaam }}</option>
                    @endforeach
                </select>
                <button type="submit" class="btn btn-secondary btn-sm">Maak selectie</button>
            </form>
        </div>
        

        <table class="table">
            <thead>
                <th>Naam product</th>
                <th>Naam Allergeen</th>
                <th>Omschrijving</th>
                <th>Aantal aanwezig</th>
                <th>Info</th>
            </thead>
            <tbody>
                
                @forelse ($allergenen as $allergeen)
                <tr>
                    <td>{{ $allergeen->ProductNaam }}</td>
                    <td>{{ $allergeen->AllergeenNaam }}</td>
                    <td>{{ $allergeen->Omschrijving }}</td>
                    <td>{{ $allergeen->AantalAanwezig }}</td>
                     <td>
                        <form action="{{ route('Allergenen.show', $allergeen->Id) }}" method="POST">
                            @csrf
                            @method('GET')
                            <button type="submit" class="btn btn-warning btn-sm">Details</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3">Geen producten met dit allergeen gevonden</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>