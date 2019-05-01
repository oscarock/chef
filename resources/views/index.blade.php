@extends('layout')

@section('content')
<div class="container pt-5" id="app">
    <div class="row">
        <div class="col-md-4" v-for="superhero in superhero">
            <div class="card">
                <img class="card-img-top" v-bind:src="superhero.picture" v-bind:alt="superhero.name" >
                <div class="card-body">
                    <div class="float-right">
                        <a href="#" v-on:click.prevent="localStorageState(superhero.id,'like')"><i class="fas fa-thumbs-up"></i></a>&nbsp;&nbsp;
                        <a href="#" v-on:click.prevent="localStorageState(superhero.id,'dontlike')"><i class="fas fa-thumbs-down"></i></a>
                    </div>
                    <h5 class="card-title">@{{ superhero.name }}</h5>                
                    <p class="card-text">@{{ superhero.publisher }}</p>
                    <a href="#" v-on:click.prevent="viewSuperhero(superhero)" class="btn btn-primary">Ver Mas</a>
                </div>
            </div><br>
        </div>   
    </div>
    @include('partials.view') 
    <ul class="pagination">
        <li v-if="pagination.current_page > 1">
            <a href="#" @click.prevent="changePage(pagination.current_page - 1)">
                <span>Atras&nbsp;&nbsp;&nbsp;</span>
            </a>
        </li>

        <li v-for="page in pagesNumber" v-bind:class="[ page == isActived ? 'active' : '']">
            <a href="#" @click.prevent="changePage(page)">
                @{{ page }}
            </a>
        </li>

        <li v-if="pagination.current_page < pagination.last_page">
            <a href="#" @click.prevent="changePage(pagination.current_page + 1)">
                <span>Siguiente</span>
            </a>
        </li>
    </ul>
</div>
@endsection