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
                    <h2 class="col-sm-12">Naam: {{ $magazijn->Naam}}</h>
                    <h2 class="col-sm-12 ">Barcode: {{ $magazijn->Barcode}}</h2>
                </dl>
                <table class="table">
                    <thead>
                        <th>Naam</th>
                        <th>Omschrijving</th>
                    </thead>
                    <tbody>
                
                        @forelse ($magazijn as $product)
                        <tr>
                    
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3">In dit product zitten geen stoffen die een allergische reactie kunnen veroorzaken</td>
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