@extends('shared.template')

@section('title', 'Dashboard')

@section('main')
    <h1>Dashboard</h1>
    <div class="row">
    <form action="/" method="POST">
        <button class="btn btn-primary mb-3" type="submit">Scan producten in</button>
    </form>
    <form action="/" method="POST">
        <button class="btn btn-danger mb-3" type="submit">Scan producten uit</button>
    </form>
    </div>
    <form action="/" method="POST">
        <button class="mb-3" type="submit">Maak overzicht vervaldata aan (PDF)</button>
    </form>
    <form action="/" method="POST">
        <button class="btn btn-success" type="submit">E-mail</button>
    </form>
@endsection
