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
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Naam</td>
                            <td>{{ $leverancier->Naam }}</td>
                        </tr>
                        <tr>
                            <td>Contactpersoon</td>
                            <td>{{ $leverancier->ContactPersoon }}</td>
                        </tr>
                        <tr>
                            <td>Leveranciernummer</td>
                            <td>{{ $leverancier->LeverancierNummer }}</td>
                        </tr>
                        <tr>
                            <td>Mobiel</td>
                            <td>{{ $leverancier->Mobiel }}</td>
                        </tr>
                        <tr>
                            <td>Straatnaam</td>
                            <td>{{ $leverancier->Straat }}</td>
                        </tr>
                        <tr>
                            <td>Huisnummer</td>
                            <td>{{ $leverancier->Huisnummer }}</td>
                        </tr>
                        <tr>
                            <td>Postcode</td>
                            <td>{{ $leverancier->Postcode }}</td>
                        </tr>
                        <tr>
                            <td>Stad</td>
                            <td>{{ $leverancier->Stad }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>