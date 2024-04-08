@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Angajați</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nume</th>
                    <th>Prenume</th>
                    <th>Email</th>
                    <th>Număr de Telefon</th>
                    <th>Data Angajării</th>
                    <th>Salariu</th>
                </tr>
            </thead>
            <tbody>
                @foreach($employees as $employee)
                    <tr>
                        <td>{{ $employee->id }}</td>
                        <td>{{ $employee->last_name }}</td>
                        <td>{{ $employee->first_name }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->phone_number }}</td>
                        <td>{{ $employee->hire_date }}</td>
                        <td>{{ $employee->salary }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
