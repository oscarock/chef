@extends('layout')

@section('content')
<div class="container pt-5" id="app">
    <div class="row">
        <div class="col-md-4" v-for="votesSuperhero in votesSuperhero">
            <div class="card">
                <img class="card-img-top" v-bind:src="votesSuperhero.picture" v-bind:alt="votesSuperhero.name">
                <div class="card-body">
                    <h5 class="card-title">@{{ votesSuperhero.name }}</h5>                
                    <p class="card-text">@{{ votesSuperhero.publisher }}</p>
                    <p class="card-text">Votos: @{{ votesSuperhero.total }}</p>
                </div>
            </div><br>
        </div>   
    </div>
</div>
@endsection