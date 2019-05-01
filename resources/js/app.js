new Vue({
    el: '#app',
    created: function(){
        this.getAll()
        
    },
    data: {
        superhero: [],
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
            $("#view").modal("show")
        }
    }
})