@vite(['resources/css/app.css', 'resources/js/app.js'])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magazijn pagina</title>
</head>
<body>
    <div class="container">

        <h1>{{ $title }}</h1>
    
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }} 
                <button type="button" class="btn-close" aria-label="sluiten" data-bs-dismiss="alert"></button>
            </div>
            <meta http-equiv="refresh" content="3;url={{ route('Magazijn.index') }}">
            @endif
    
        <a href="{{ route('Magazijn.create') }}" class="btn btn-primary mt-2">Nieuwe product</a>
    
        <table class="table">
            <thead>
                <th>Barcode</th>
                <th>Naam</th>
                <th>VerpakkingsEenheid (kg)</th>
                <th>Aantal aanwezig</th>
                <th>Allergeen info</th>
                <th>Leverancie info</th>
            </thead>
            <tbody>
                
                @forelse ($magazijn as $product)
                <tr>
                    <td>{{ $product->Barcode }}</td>
                    <td>{{ $product->Naam }}</td>
                    <td>{{ $product->VerpakkingsEenheid }}</td>
                    <td>{{ $product->AantalAanwezig }}</td>
                    <td>
                        <form action="{{ route('Magazijn.AllergeenInfo', $product->Id) }}" method="POST">
                            @csrf
                            @method('GET')
                            <button type="submit" class="btn btn-danger btn-sm">X</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('Magazijn.show', $product->Id) }}" method="POST">
                            @csrf
                            @method('GET')
                            <button type="submit" class="btn btn-primary btn-sm">?</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3">Geen producten gevonden</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>