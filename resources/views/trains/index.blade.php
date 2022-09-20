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
                    <p>Ciao sei in home</p>
                </div>
            </div>
        </div>
    </main>
@endsection