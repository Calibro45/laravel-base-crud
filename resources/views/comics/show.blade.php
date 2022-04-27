@extends('layout.standard')

@section('content')

    <div class="container">
        <div class="row">
            
            <figure class="col-4">
                <img src="{{ $comic->thumb }}">
            </figure>

            <div class="col-6">
                <h1>{{$comic->title}}</h1>

                <div>
                    <p>{{ $comic->description }}</p>
                </div>

                <div>
                    <h2>Informazioni</h2>
        
                    <ol>
                        <li>
                            Series: {{ $comic->series }}
                        </li>
                        <li>
                            Tipologia: {{ $comic->type }}
                        </li>
                        <li>
                            Data di Uscita: {{ $comic->sale_date }}
                        </li>
                        <li>
                            Prezzo: € {{ $comic->price }}
                        </li>
                    </ol>
                </div>

                <div class="d-flex justify-content-end">
                    <button class="btn btn-light mr-3">
                        <a href="{{ route('comics.edit', $comic) }}">modifica</a>
                    </button>
 
                    <form action="{{ route('comics.destroy', $comic) }}" method="POST">
                        @csrf
                        @method('DELETE')
        
                        <button type="submit" class="btn btn-light">
                            Elimina
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection
