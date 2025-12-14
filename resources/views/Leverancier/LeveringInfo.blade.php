@vite(['resources/css/app.css', 'resources/js/app.js']);
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Details</title>
    </head>
    <body>
        <div class="container d-flex justify-content-center">
            <div class="col-md-8">
                <h2 class="mb-3">{{ $title }}</h2>
                <dl class="row">
                    <h2 class="col-sm-12">Naam leverancier: {{ $leverancier->LeverancierNaam}}</h>
                    <h2 class="col-sm-12 ">Contactpersoon: {{ $leverancier->ContactPersoon}}</h2>
                    <h2 class="col-sm-12 ">Leverancier nr: {{ $leverancier->LeverancierNummer}}</h2>
                    <h2 class="col-sm-12 ">Mobiel: {{ $leverancier->Mobiel}}</h2>
                </dl>
                <table class="table">
                    <thead>
                        <th>Naam</th>
                        <th>Omschrijving</th>
                    </thead>
                    <tbody>
                        @forelse ($leverancier as $leveringInfo)
                            <tr>
                                <td>{{ $leveringInfo->ProductNaam }}</td>
                                <td>{{ $leveringInfo->AantalAanwezig }}</td>
                                <td>{{ $leveringInfo->VerpakkingsEenhiedI }}</td>
                                <td>{{ $leveringInfo->Mobiel }}</td>
                                <td>{{ $leveringInfo->VerschillendeProducten }}</td>
                                <td>
                                <form action="{{ route('Leverancier.LeveringInfo', $leveringInfo->Id) }}" method="POST">
                                    @csrf
                                    @method('GET')
                                    <button type="submit" class="btn btn-sm"><i class="bi bi-box"></i></button>
                                </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3">Geen leveranciers gevonden</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                <div class="mt-3 d-flex gap-2">
                    <a href="{{ route('Magazijn.index') }}" class="btn btn-secondary btn-sm ms-auto">Terug</a>
                </div>
            </div>
        </div>
    </body>
</html>