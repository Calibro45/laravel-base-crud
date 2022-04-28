@extends('layout.standard')

@section('content')

    <div class="container">

        <h1 class="text-uppercase text-center mb-3">Nuovo Fumetto</h1>

        <form action="{{ route('comics.store') }}" method="POST">
            @csrf

            <div class="form-group row">
                <label for="title" class="col-2">Titolo</label>
                <div class="col-10">
                    <input type="text" name="title" placeholder="titolo" 
                    class="w-100 form-control @error('title') is-invalid @enderror">

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
                    <input type="text" name="thumb" placeholder="Copertina" 
                    class="w-100 form-control">
                </div>
            </div>

            <div class="form-group row">
                <label for="series" class="col-2">Serie</label>
                <div class="col-10">
                    <input type="text" name="series" placeholder="Serie" 
                    class="w-100 form-control">
                </div>
            </div>

            <div class="form-group row">
                <label for="type" class="col-2">Tipologia</label>
                <div class="col-10">
                    <select name="type" id="type" class="custom-select form-select">
                        <option value="">Seleziona</option>
                        <option value="comic book">Comic Book</option>
                        <option value="graphic novel">Graphic Novel</option>
                    </select>
                </div>
            </div>


            <div class="form-group row">
                <label for="description" class="col-2">Descrizione</label>
                <div class="col-10">
                    <textarea name="description" id="description" cols="30" rows="10" 
                    class="w-100 form-control">
                        Inserisci Descrizione
                    </textarea>
                </div>
            </div>

            <div class="form-group row justify-content-between">
                <div>
                    <label for="sale_date">Data di uscita</label>
                    <input type="date" name="sale_date" class="form-control">
                </div>

                <div>
                    <label for="price">Prezzo €</label>
                    <input type="number" name="price" min="0" max="999.99" step=".01" class="form-control">
                </div>
            </div>

            <div class="text-center mt-5">
                <button class="btn btn-light btn-lg">Crea</button>
            </div>

            {{-- * display errors * --}}

            @if ($errors->any())
                <div class="alert alert-danger mt-3">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

        </form>

    </div>
    
@endsection