@extends('layouts.main')

{{-- Title --}}
@section('title','Home')
    
{{-- CDNs --}}
@section('cdns')
<script src="https://kit.fontawesome.com/ddb740f05b.js" crossorigin="anonymous"></script>
@endsection

{{-- MAIN CONTENT --}}
@section('main-content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Agency</th>
                            <th scope="col">Departure Station</th>
                            <th scope="col">Arrival Station</th>
                            <th scope="col">Departure Time</th>
                            <th scope="col">Arrival Time</th>
                            <th scope="col">Train Code</th>
                            <th scope="col">Carrieges Number</th>
                            <th scope="col">In Orario</th>
                            <th scope="col">Cancellato</th>
                        </tr>
                        </thead>
                        @forelse($trains as $train)
                        <tbody>
                            <tr>
                                <th scope="row">{{ $train->id }}</th>
                                <td>{{ $train->agency }}</td>
                                <td>{{ $train->departure_station }}</td>
                                <td>{{ $train->arrival_station }}</td>
                                <td>{{ $train->departure_time }}</td>
                                <td>{{ $train->arrival_time }}</td>
                                <td>{{ $train->train_code }}</td>
                                <td>{{ $train->carrieges_number }}</td>
                                <td>{{ $train->in_time }}</td>
                                <td>{{ $train->is_delete }}</td>
                            </tr>
                        </tbody>
                        @empty
                            <p>Non ci sono treni in programmazione</p>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection