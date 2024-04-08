@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Căutare Angajați</h1>
        <form action="/employees/search" method="GET">
            <div class="form-group">
                <label for="query">Caută Angajat:</label>
                <input type="text" class="form-control" id="query" name="query" placeholder="Introduceti numele, prenumele sau departamentul angajatului">
            </div>
            <button type="submit" class="btn btn-primary">Caută</button>
        </form>
    </div>
@endsection
