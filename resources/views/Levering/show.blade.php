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
                            <dt class="col-sm-3">Startdatum</dt>
                            <dd class="col-sm-9">{{ $leveringen[0]->StartDatum}}</dd>

                            <dt class="col-sm-3">Einddatum</dt>
                            <dd class="col-sm-9">{{ $leveringen[0]->EindDatum}}</dd>

                            <dt class="col-sm-3">Productnaam</dt>
                            <dd class="col-sm-9">{{ $leveringen[0]->ProductNaam}}</dd>

                            <dt class="col-sm-3">Allergenen</dt>
                            <dd class="col-sm-9">{{ $leveringen[0]->Allergenen}}</dd>
                        </dl>
                    </div>
                </div> 

                <table class="table">
                    <thead>
                        <th>Datum levering</th>
                        <th>Aantal</th>
                    </thead>
                    <tbody>
                        
                        @foreach ($leveringen as $levering)
                        <tr>
                            <td>{{ $levering->DatumLevering }}</td>
                            <td>{{ $levering->Aantal }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>