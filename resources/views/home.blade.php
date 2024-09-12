{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')


@section('content')
<div class="container my-5">
    <h1>Elenco treni</h1>

    <table class="table">

        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Compagnia</th>
            <th scope="col">Da</th>
            <th scope="col">Orario partenza</th>
            <th scope="col">A</th>
            <th scope="col">Orario arrivo</th>
            <th scope="col">Prezzo</th>
            <th scope="col">Codice treno</th>
            <th scope="col">Numero carrozze</th>
            <th scope="col">In orario</th>
            <th scope="col">Stato</th>

          </tr>
        </thead>

        <tbody>
            @forelse ($trains as $train)

                <tr>
                    <th scope="row">{{$train->id}}</th>
                    <td>{{$train->company}}</td>
                    <td>{{$train->departure_station}}</td>
                    <td>{{$train->departure_date}}</td>
                    <td>{{$train->arrival_station}}</td>
                    <td>{{$train->arrival_date}}</td>
                    <td>{{$train->price}}€</td>
                    <td>{{$train->train_code}}</td>
                    <td>{{$train->carriages_number}}</td>
                    <td>{{$train->is_on_time}}</td>
                    <td>{{$train->is_canceled}}</td>

                </tr>

            @empty

            @endforelse

        </tbody>

    </table>
</div>

@endsection


@section('titlePage')
    home
@endsection
