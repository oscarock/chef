<!-- The Modal -->
<form method="POST" v-on:submit.prevent="viewSuperhero(fillsuperhero.id)">
    <div class="modal fade" id="view">
        <div class="modal-dialog">
            <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title">@{{ fillsuperhero.name }} | @{{ fillsuperhero.publisher }}</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <img class="card-img-top" v-bind:src="fillsuperhero.picture" style="width: 150px;margin: auto; display: block;"><br>
                <h6>¿ Desea votar por el superheroe ? <a href="#" v-on:click.prevent="voteSuperhero(fillsuperhero.id)"><i class="fas fa-star"></i></a></h6>
                <h3>Informacion</h3>
                <p>@{{ fillsuperhero.info }}</p>
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
</form>