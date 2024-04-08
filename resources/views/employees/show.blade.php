@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalii Angajat</h1>
        <ul>
            <li><strong>ID:</strong> {{ $employee->id }}</li>
            <li><strong>Nume:</strong> {{ $employee->last_name }}</li>
            <li><strong>Prenume:</strong> {{ $employee->first_name }}</li>
            <li><strong>Email:</strong> {{ $employee->email }}</li>
            <li><strong>Număr de Telefon:</strong> {{ $employee->phone_number }}</li>
            <li><strong>Data Angajării:</strong> {{ $employee->hire_date }}</li>
            <li><strong>Salariu:</strong> {{ $employee->salary }}</li>
        </ul>
    </div>
@endsection
