@extends('layout')

@section('content')
<div class="row">
    <div class="col-md-4" v-for="superhero in superhero">
        <div class="card">
            <img class="card-img-top" v-bind:src="superhero.picture" v-bind:alt="superhero.name" >
            <div class="card-body">
                <div class="float-right">
                    <a href="#" v-on:click.prevent="stateHero(superhero.id,'like')"><i id="like" class="fas fa-thumbs-up"></i></a>&nbsp;&nbsp;
                    <a href="#" id="dontlike" v-on:click.prevent="stateHero(superhero.id,'dontlike')"><i class="fas fa-thumbs-down"></i></a>
                </div>
                <h5 class="card-title">@{{ superhero.name }}</h5>                
                <p class="card-text">@{{ superhero.publisher }}</p>
                <a href="#" v-on:click.prevent="viewSuperhero(superhero)" class="btn btn-primary">Ver Mas</a>
            </div>
        </div><br>
    </div>   
</div>
@include('partials.view') 
@endsection