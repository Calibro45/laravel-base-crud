@extends('layout.standard')

@section('content')

    <div class="container">

        <h1 class="text-uppercase text-center mb-3">Nuovo Fumetto</h1>

        <form action="{{ route('comics.store') }}" method="POST">
            @csrf

            <div class="form-group row">
                <label for="title" class="col-2">Titolo</label>
                <div class="col-10">
                    <input type="text" name="title" placeholder="titolo" value="{{ old('title') }}"
                    class="w-100 form-control 
                    @error('title') is-invalid @enderror">

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
                    <input type="text" name="thumb" placeholder="Copertina" value="{{ old('thumb') }}"
                    class="w-100 form-control 
                    @error('thumb') is-invalid @enderror">

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
                    <input type="text" name="series" placeholder="Serie" value="{{ old('series') }}"
                    class="w-100 form-control 
                    @error('series') is-invalid @enderror">

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
                    <select name="type" id="type" 
                    class="custom-select form-select @error('series') is-invalid @enderror">
                        <option value="">Seleziona</option>
                        <option value="comic book" {{ old('type') == 'comic book' ? 'selected' : '' }}>
                            Comic Book
                        </option>
                        <option value="graphic novel" {{ old('type') == 'graphic novel' ? 'selected' : '' }}>
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
                <div class="col-10 @error('description') is-invalid @enderror">
                    <textarea name="description" id="description" rows="10" placeholder="inserisci descrizione"
                    value="{{ old('description') }}"
                    class="w-100 form-control">{{ old('description') }}</textarea>

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
                    <input type="date" name="sale_date" value="{{ old('sale_date') }}"
                    class="form-control @error('sale_date') is-invalid @enderror">

                    {{-- * display error * --}}
                    @error('description')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="w-auto">
                    <label for="price">Prezzo €</label>
                    <input type="number" name="price" min="0" max="999.99" step=".01" value="{{ old('price') }}"
                    class="form-control @error('price') is-invalid @enderror">

                    {{-- * display error * --}}
                    @error('price')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="text-center mt-5">
                <button class="btn btn-light btn-lg">Crea</button>
            </div>

        </form>

    </div>
    
@endsection