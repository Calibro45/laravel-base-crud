@extends('layout.standard')

@section('content')

    <div class="container">

        <h1 class="text-uppercase text-center mb-3">Nuovo Fumetto</h1>

        <form action="{{ route('comics.update', $comic) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group row">
                <label for="title" class="col-2">Titolo</label>
                <div class="col-10">
                    <input type="text" name="title" placeholder="titolo" value="{{ $comic->title }}" 
                    class="w-100">
                </div>
            </div>
            
            <div class="form-group row">
                <label for="thumb" class="col-2">Copertina</label>
                <div class="col-10">
                    <input type="text" name="thumb" placeholder="Copertina" value="{{ $comic->thumb }}"
                    class="w-100">
                </div>
            </div>

            <div class="form-group row">
                <label for="series" class="col-2">Serie</label>
                <div class="col-10">
                    <input type="text" name="series" placeholder="Serie" value="{{ $comic->series }}"
                    class="w-100">
                </div>
            </div>

            <div class="form-group row">
                <label for="type" class="col-2">Tipologia</label>
                <div class="col-10">
                    <select name="type" id="type" class="custom-select">
                        <option value="">Seleziona</option>
                        <option value="comic book" {{ ($comic->type == 'comic book') ? 'selected' : '' }}>
                            Comic Book
                        </option>
                        <option value="graphic novel" {{ ($comic->type == 'graphic novel') ? 'selected' : '' }}>
                            Graphic Novel
                        </option>
                    </select>
                </div>
            </div>


            <div class="form-group row">
                <label for="description" class="col-2">Descrizione</label>
                <div class="col-10">
                    <textarea name="description" id="description" cols="30" rows="10" class="w-100">
                        {{ $comic->description }}
                    </textarea>
                </div>
            </div>

            <div class="form-group row justify-content-between">
                <div>
                    <label for="sale_date">Data di uscita</label>
                    <input type="date" name="sale_date" value="{{ $comic->sale_date }}">
                </div>

                <div>
                    <label for="price">Prezzo €</label>
                    <input type="number" name="price" min="0" max="999.99" step=".01" value="{{ $comic->price }}">
                </div>
            </div>

            <div class="text-center mt-5">
                <button class="btn btn-light btn-lg">Salva</button>
            </div>

        </form>
    </div>
    
@endsection