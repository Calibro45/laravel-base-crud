@extends('layout.standard')

@section('content')

    <div class="container">

        <form action="{{ route('comics.store') }}" method="POST">
            @csrf

            <div>
                <label for="title">Titolo</label>
                <input type="text" name="title" placeholder="titolo">
    
                <label for="thumb">Copertina</label>
                <input type="text" name="thumb" placeholder="Copertina">
            </div>

            <div>
                <label for="series">Serie</label>
                <input type="text" name="series" placeholder="Serie">

                <label for="type">Tipologia</label>
                <select name="type" id="type">
                    <option value="">Seleziona</option>
                    <option value="comic book">Comic Book</option>
                    <option value="graphic novel">Graphic Novel</option>
                </select>
            </div>

            <div>
                <label for="description">Descrizione</label>
                <textarea name="description" id="description" cols="30" rows="10">Inserisci Descrizione</textarea>
            </div>

            <div>
                <label for="sale_date">Data di uscita</label>
                <input type="date" name="sale_date">
    
                <label for="price">Prezzo €</label>
                <input type="number" name="price" min="0" max="999.99" step=".01">
            </div>

            <div>
                <button>Crea</button>
            </div>

        </form>

    </div>
    
@endsection