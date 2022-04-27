@extends('layout.standard')

@section('content')

    <div class="container">

        <h1>Lista Comics</h1>

        <table class="table table-hover table-dark">
            <tbody>
    
                <tr>
                    <th>Id</th>
                    <th>Titolo</th>
                    <th>Serie</th>
                    <th>Data Uscita</th>
                    <th>Tipologia</th>
                    <th>Prezzo</th>
                    <th>Pagina Fumetto</th>
                    <th>Modifica</th>
                    <th>Elimina</th>
                </tr>
                
                {{-- ciclo su comics --}}
    
                @foreach ($comics as $comic)
    
                <tr>
                    <td>
                        {{ $comic->id }}
                    </td>
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
                    <td>
                        <a href="{{ route('comics.edit', $comic) }}">Modifica</a>
                    </td>
                    <td>
                        <form action="{{ route('comics.destroy', $comic) }}" method="POST">
                            @csrf
                            @method('DELETE')
    
                            <button type="submit">Elimina</button>
                           
                        </form>
                    </td>
                </tr>    
    
                @endforeach
    
            </tbody>
        </table>

    </div>
    
@endsection