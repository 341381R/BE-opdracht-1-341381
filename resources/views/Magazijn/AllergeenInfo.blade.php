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

                <div class="card shadow-sm">
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-sm-3">Naam</dt>
                            <dd class="col-sm-9">{{ $product->Naam}}</dd>

                            <dt class="col-sm-3">Omschrijving</dt>
                            <dd class="col-sm-9">{{ $product->Omschrijving}}</dd>

                            <dt class="col-sm-3">Datum gewijzigd</dt>
                            <dd class="col-sm-9">{{ $product->DatumGewijzigd}}</dd>
                        </dl>
                    </div>
                </div> 

                <div class="mt-3 d-flex gap-2">
                    <a href="{{ route('Allergenen.index') }}" class="btn btn-secondary btn-sm ms-auto">Terug</a>
                </div>
            </div>
        </div>
    </body>
</html>