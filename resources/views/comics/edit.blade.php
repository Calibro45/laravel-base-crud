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

                    {{-- * display error * --}}
                    @error('title')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            
            <div class="form-group row">
                <label for="thumb" class="col-2">Copertina</label>
                <div class="col-10">
                    <input type="text" name="thumb" placeholder="Copertina" value="{{ $comic->thumb }}"
                    class="w-100">

                    {{-- * display error * --}}
                    @error('thumb')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="series" class="col-2">Serie</label>
                <div class="col-10">
                    <input type="text" name="series" placeholder="Serie" value="{{ $comic->series }}"
                    class="w-100">

                    {{-- * display error * --}}
                    @error('series')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
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

                    {{-- * display error * --}}
                    @error('type')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>


            <div class="form-group row">
                <label for="description" class="col-2">Descrizione</label>
                <div class="col-10">
                    <textarea name="description" id="description" cols="30" rows="10" placeholder="inserisci descrizione"
                    class="w-100">{{ $comic->description }}</textarea>

                    {{-- * display error * --}}
                    @error('description')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="form-group row justify-content-between">
                <div class="w-auto">
                    <label for="sale_date">Data di uscita</label>
                    <input type="date" name="sale_date" value="{{ $comic->sale_date }}">

                    {{-- * display error * --}}
                    @error('sale_date')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="w-auto">
                    <label for="price">Prezzo €</label>
                    <input type="number" name="price" min="0" max="999.99" step=".01" 
                    value="{{ $comic->price }}">

                    {{-- * display error * --}}
                    @error('price')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="text-center mt-5">
                <button class="btn btn-light btn-lg">Salva</button>
            </div>

        </form>
    </div>
    
@endsection