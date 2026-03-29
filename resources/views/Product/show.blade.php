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

                            <dt class="col-sm-3">Barcode</dt>
                            <dd class="col-sm-9">{{ $product->Barcode}}</dd>

                            <dt class="col-sm-3">Bevat gluten</dt>
                            <dd class="col-sm-9">{{ $product->BevatGluten}}</dd>
                            
                            <dt class="col-sm-3">Bevat gelatine</dt>
                            <dd class="col-sm-9">{{ $product->BevatGelatine}}</dd>
                            
                            <dt class="col-sm-3">Bevat AZO-kleurstof</dt>
                            <dd class="col-sm-9">{{ $product->BevatAZO_kleurstof}}</dd>

                            <dt class="col-sm-3">Bevat lactose</dt>
                            <dd class="col-sm-9">{{ $product->BevatLactose}}</dd>

                            <dt class="col-sm-3">Bevat gluten</dt>
                            <dd class="col-sm-9">{{ $product->BevatSoja}}</dd>
                        </dl>
                    </div>
                </div> 

                <div class="mt-3 d-flex gap-2">
                
                    <form action="{{ route('Product.destroy', $product->Id) }}" method="POST" 
                        onsubmit="return confirm('Weet je zeker dat je dit product wilt verwijderen?');">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="datum" value="{{ $product->EinddatumLevering }}">
                        <button type="submit" class="btn btn-danger btn-sm">Verwijderen</button>
                    </form>
                    <a href="{{ route('Allergenen.index') }}" class="btn btn-secondary btn-sm ms-auto">Terug</a>
                </div>
            </div>
        </div>
    </body>
</html>