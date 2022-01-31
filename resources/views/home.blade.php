@extends('shared.template')

@section('title', 'Dashboard')

@section('main')
    <div class="container">
        <h1 class="mb-5 pt-4">Dashboard</h1>
        <div class="row col-12 mt-4 ">
            <div class="col-2">
                <img class="ml-3" src="/assets/images/scanner.png" alt="Scanner" >
            </div>
            <div class="row col-10 ml-2 ">
                <form action="/" method="POST">
                    <button class="btn btn-success mb-5" type="submit">Scan producten in</button>
                </form>
                <form action="/" method="POST" >
                    <button class="btn btn-danger mb-5 ml-2" type="submit">Scan producten uit</button>
                </form>
            </div>
        </div>
        <div class="row col-12 mt-4">
            <div class="col-2">
                <img class="ml-3" src="/assets/images/pdf.png" alt="PDF" >
            </div>
            <div class="row col-10 ml-2 mb-3">
                <form action="/" method="POST">
                    <button class="btn btn-outline-primary mb-3" type="submit">Maak overzicht vervaldata aan (PDF)</button>
                </form>
            </div>
        </div>
        <div class="row col-12 mt-4 pb-4">
            <div class="col-2">
                <img class="ml-3" src="/assets/images/Gmail.png" alt="Mail" >
            </div>
            <div class="row col-10 ml-2 ">
                <form action="/" method="POST">
                    <button class="btn btn-outline-success" type="submit">Verstuur E-mail</button>
                </form>
            </div>
        </div>
    </div>
@endsection



