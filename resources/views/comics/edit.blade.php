@extends('layout.standard')

@section('content')

    <div class="container">

        <form action="{{ route('comics.update', $comic) }}" method="POST">
            @csrf
            @method('PUT')

            <div>
                <label for="title">Titolo</label>
                <input type="text" name="title" placeholder="titolo" value="{{ $comic->title }}">
    
                <label for="thumb">Copertina</label>
                <input type="text" name="thumb" placeholder="Copertina" value="{{ $comic->thumb }}">
            </div>

            <div>
                <label for="series">Serie</label>
                <input type="text" name="series" placeholder="Serie" value="{{ $comic->series }}">

                <label for="type">Tipologia</label>
                <select name="type" id="type">
                    <option value="">Seleziona</option>
                    <option value="comic book" {{ ($comic->type == 'comic book') ? 'selected' : '' }}>Comic Book</option>
                    <option value="graphic novel" {{ ($comic->type == 'graphic novel') ? 'selected' : '' }}>Graphic Novel</option>
                </select>
            </div>

            <div>
                <label for="description">Descrizione</label>
                <textarea name="description" id="description" cols="30" rows="10">
                    {{ $comic->description }}
                </textarea>
            </div>

            <div>
                <label for="sale_date">Data di uscita</label>
                <input type="date" name="sale_date" value="{{ $comic->sale_date }}">
    
                <label for="price">Prezzo €</label>
                <input type="number" name="price" min="0" max="999.99" step=".01" value="{{ $comic->price }}">
            </div>

            <div>
                <button>Salva</button>
            </div>

        </form>

    </div>
    
@endsection