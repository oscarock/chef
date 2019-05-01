new Vue({
    el: '#app',
    created: function(){
        this.getAll()
        
    },
    data: {
        superhero: [],
        fillsuperhero: {'id': '', 'name': '', 'picture': '', 'publisher':'', 'info':'info'}
    },
    methods: {
        getAll: function(){
            var urlsuperhero = "api/superheros"
            axios.get(urlsuperhero).then(response => {
                this.superhero = response.data
            })
        },
        stateHero: function(id,state){
            localStorage.setItem(id, state);
            if(state == "like"){
                toastr.success("me gusta")
            }else{
                toastr.error("no me gusta")
            }
        },
        viewSuperhero: function(superhero){
            this.fillsuperhero.id = superhero.id
            this.fillsuperhero.name = superhero.name
            this.fillsuperhero.picture = superhero.picture
            this.fillsuperhero.publisher = superhero.publisher
            this.fillsuperhero.info = superhero.info

            $("#view").modal("show")
        },
        voteSuperhero: function(superhero){
            var urladdvote = 'addVote'
            axios.get(urladdvote, {
                params: {
                  id: superhero
                }
                }).then(response => {
                    $("#view").modal("hide")
                    toastr.success("Voto Agregado!!")
            })
        }
    }
})