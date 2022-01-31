@extends('shared.template')

@section('title', 'PoC')

@section('main')
    <h1>Dashboard</h1>
    <form action="/" method="POST">
        <button type="submit">Scan producten in</button>
    </form>
    <form action="/" method="POST">
        <button type="submit">Scan producten uit</button>
    </form>
    <form action="/" method="POST">
        <button type="submit">Maak overzicht vervaldata aan (PDF)</button>
    </form>
    <form action="/" method="POST">
        <button type="submit">E-mail</button>
    </form>
@endsection
