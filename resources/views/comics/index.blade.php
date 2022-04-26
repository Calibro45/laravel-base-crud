@extends('layout.standard')

@section('content')
    
    <table>
        <thead>
            <tr>
                <th>Lista Comics</th>
            </tr>
        </thead>

        <tbody>

            <tr>
                <th>Titolo</th>
                <th>Serie</th>
                <th>Data Uscita</th>
                <th>Tipologia</th>
                <th>Prezzo</th>
                <th>Pagina Fumetto</th>
            </tr>
            
            {{-- ciclo su comics --}}

            @foreach ($comics as $comic)

            <tr>
                <td>
                    {{ $comic->title }}
                </td>
                <td>
                    {{ $comic->series }}
                </td>
                <td>
                    {{ $comic->sale_date }}
                </td>
                <td>
                    {{ $comic->type }}
                </td>
                <td>
                    {{ $comic->price }} €
                </td>
                <td>
                    <a href="{{ route('comics.show', $comic->id) }}">Fumetto</a>
                </td>
            </tr>    

            @endforeach

        </tbody>
    </table>

@endsection