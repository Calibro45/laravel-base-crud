@extends('layout.standard')

@section('content')

    <div class="container">
        
        <h1>{{$comic->title}}</h1>

        <figure>
            <img src="{{ $comic->thumb }}">
        </figure>

        <div>
            <h2>Descrizione</h2>
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

        <div>
            <button>
                <a href="{{ route('comics.edit', $comic) }}">modifica</a>
            </button>
        </div>

        <div>
            <form action="{{ route('comics.destroy', $comic) }}" method="POST">
                @csrf
                @method('DELETE')

                <button type="submit">Elimina</button>
            </form>
        </div>

    </div>

@endsection
