@extends('layouts.ownerDashboard')

@section('contenido_owner')
    <div class="container mx-auto mt-8">
        <h1 class="text-3xl font-bold mb-6">Clasificaciones de Fútbol</h1>
        <div id="wg-api-football-standings"
            data-host="v3.football.api-sports.io"
            data-key="c4f6c709d104ada198beb799217fdede"
            data-league="39"
            data-team=""
            data-season="2021"
            data-theme=""
            data-show-errors="false"
            data-show-logos="true"
            class="wg_loader">
        </div>
        <script
            type="module"
            src="https://widgets.api-sports.io/2.0.3/widgets.js">
        </script>
    </div>
@endsection

